import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ["quantityInput", "submitButton"];
    connect() {
    }

    addToCart() {
        event.preventDefault();
        const variantId = this.submitButtonTarget.dataset.variant;
        const quantity = this.quantityInputTarget.value;

        const flashContainer = document.getElementById('flash-messages');
        flashContainer.innerHTML = '';

        fetch(`/cart/add`, {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify({variantId: variantId, quantity:quantity})
        })
            .then(response => {
                if(!response.ok) {
                    throw new Error('Erreur ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    this.dispatch('added', {
                        target: document.documentElement,
                    });
                    const flashMessage = document.createElement('div');
                    flashMessage.classList.add('alert', 'alert-success');
                    flashMessage.textContent = 'Produit ajouté au panier avec succès';
                    flashContainer.appendChild(flashMessage);
                }
            })
            .catch(error => {
                const flashMessage = document.createElement('div');
                flashMessage.classList.add('alert', 'alert-danger');
                flashMessage.textContent = 'Erreur pendant l\'ajout. ' + error.message;
                flashContainer.appendChild(flashMessage);
            });
    }
}