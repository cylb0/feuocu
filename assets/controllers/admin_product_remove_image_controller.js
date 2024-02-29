import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ['removeIcon'];
    static values = {

    }
    connect() {
        this.removeIconTarget.addEventListener('click', event => {
            const productId = this.element.dataset.productId;
            const imageId = this.element.dataset.imageId;

            const flashContainer = document.getElementById('flash-messages');
            flashContainer.innerHTML = '';

            fetch('/admin/product/image/remove', {
                method: 'DELETE',
                headers: {
                    'Content-type': 'application/json'
                },
                body: JSON.stringify({productId: productId, imageId: imageId})
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
                        const flashMessage = document.createElement('div');
                        flashMessage.classList.add('alert', 'alert-success');
                        flashMessage.textContent = 'Image supprimée';
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
                    console.error('Erreur : ' + error);
                });
        })
    }
}