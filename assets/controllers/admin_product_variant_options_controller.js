import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ['noVariant'];
    options;
    connect() {
        this.options = this.element.querySelectorAll('.variant-option');
        if (this.noVariantTarget.checked) {
            this.options.forEach((option) => {
                option.classList.add('d-none');
            })
        }
    }
    toggle() {
        this.options.forEach((option) => {
            option.classList.toggle('d-none');
        })
    }
}