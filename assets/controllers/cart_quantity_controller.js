import {Controller} from "@hotwired/stimulus";

export default class extends Controller {

    static targets = ['price', 'quantityInput', 'totalItem']
    connect() {
        this.update();
    }
    update() {
        this.quantityInputTarget.value = Math.max(this.quantityInputTarget.value, 1);
        this.quantityInputTarget.value = Math.min(this.quantityInputTarget.value, this.quantityInputTarget.getAttribute('max'));

        const variantId = this.element.dataset.variant;
        let quantity = this.quantityInputTarget.value;

        let price = parseFloat(this.priceTarget.innerHTML);

        let formData = new FormData();
        formData.append('variantId', variantId);
        formData.append('quantity', quantity);

        fetch('/cart/update', {
            method: 'POST',
            body: formData
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Fail : ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    this.totalItemTarget.innerHTML = (price * quantity).toFixed(2);
                    this.dispatch('updated', {
                        target: document.documentElement,
                    });
                } else {
                    alert ('error : ' + data.message);
                }
            })
            .catch(error => {
                console.error('Erreur : ', error);
            });

    }
}