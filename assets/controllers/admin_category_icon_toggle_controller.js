import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ['parent', 'image'];
    connect() {
        this.update();
    }

    update() {
        if (this.parentTarget.value === '') {
            this.imageTarget.parentNode.classList.remove('d-none');
        } else {
            this.imageTarget.parentNode.classList.add('d-none');
        }
    }
}