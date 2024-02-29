import {Controller} from "@hotwired/stimulus";

export default class extends Controller {

    static targets = ['count', 'spinner'];
    connect() {
        this.update();
    }

    update() {

        this.countTarget.style.display = 'none';
        this.spinnerTarget.style.display = 'block';

        fetch('/cart/count')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Fail: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                this.spinnerTarget.style.display = 'none';
                this.countTarget.innerHTML = data.count;
                this.countTarget.style.display = 'block';
            });
    }
}