import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ['select', 'hexadiv', 'hexacodeField']
    connect() {
        this.update();
    }

    update() {
        const selectedOption = this.selectTarget.options[this.selectTarget.selectedIndex];
        const dataType = selectedOption.dataset.type;
        const hexacodeField = this.hexadivTarget.querySelector('#product_option_value_hexacode');

        if (dataType === 'color'){
            this.hexadivTarget.style.display = 'block';
            hexacodeField.required = true;
        } else {
            this.hexadivTarget.style.display = 'none';
            hexacodeField.required = false;
        }
    }
}