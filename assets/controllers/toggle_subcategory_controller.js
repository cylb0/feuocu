import {Controller} from "@hotwired/stimulus";

export default class extends Controller {

    connect() {

    }

    toggle() {
        this.element.classList.toggle('d-none');
    }
}