import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    connect() {
        this.element.addEventListener('change', event => {
            const variantId = this.element.dataset.variantId;
            const quantity = parseInt(this.element.value);

            const flashContainer = document.getElementById('flash-messages');
            flashContainer.innerHTML = '';

            fetch('/admin/product/variant/update/stock', {
                method: 'POST',
                headers: {
                    'Content-type' : 'application/json'
                },
                body: JSON.stringify({variantId: variantId, quantity: quantity})
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Fail: ' + response.status);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        const flashMessage = document.createElement('div');
                        flashMessage.classList.add('alert', 'alert-success');
                        flashMessage.textContent = 'Quantité mise à jour';
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
        });
    }
}