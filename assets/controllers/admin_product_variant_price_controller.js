import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    connect() {
        this.element.addEventListener('change', event => {
            const variantId = this.element.dataset.variantId;
            let newPrice = parseFloat(this.element.value.replace(',', '.')).toFixed(2) || 0;

            const flashContainer = document.getElementById('flash-messages');
            flashContainer.innerHTML = '';

            fetch('/admin/product/variant/update/price', {
                method: 'POST',
                headers: {
                    type: 'application/json'
                },
                body: JSON.stringify({variantId: variantId, newPrice: newPrice})
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Fail: ' + response.status);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        const totalPriceDiv = this.element.closest('tr').querySelector('div[name="admin-total-price"]');
                        const basePrice = totalPriceDiv.dataset.basePrice;
                        totalPriceDiv.innerHTML = ((parseFloat(newPrice) + parseFloat(basePrice)).toFixed(2)) + ' €';
                        const flashMessage = document.createElement('div');
                        flashMessage.classList.add('alert', 'alert-success');
                        flashMessage.textContent = 'Prix mis à jour';
                        flashContainer.appendChild(flashMessage);
                    } else {
                        const message = data.message;
                        const flashMessage = document.createElement('div');
                        flashMessage.classList.add('alert', 'alert-danger');
                        flashMessage.textContent = message;
                        flashContainer.appendChild(flashMessage);
                    }
                })
                .catch(error => {
                    console.error('Erreur: ', error);
                })
        })
    }
}