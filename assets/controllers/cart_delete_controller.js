import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    static targets = [];
    connect() {
        const deleteButton = this.element.querySelector('div button');

        deleteButton.addEventListener('click', (e) => {
            const variantId = parseInt(this.element.dataset.variant);
            const flashContainer = document.getElementById('flash-messages');
            flashContainer.innerHTML = '';

            fetch(`/cart/delete/${variantId}`, {
                method: 'DELETE'
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Fail: ' + response.status);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        this.element.remove();
                        this.dispatch('removed', {
                            target: document.documentElement
                        })
                        if (data.empty) {
                            location.reload();
                        }
                    } else {
                        const flashMessage = document.createElement('div');
                        flashMessage.classList.add('alert', 'alert-danger');
                        flashMessage.textContent = 'Erreur pendant la suppression';
                        flashContainer.appendChild(flashMessage);
                    }
                })
                .catch(error => {
                    console.error('Erreur pendant la suppression de l\'article: ' + error);
                })
        })
    }
}