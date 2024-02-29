import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ['sidebar', 'mask'];

    connect() {

    }

    toggle() {
        this.sidebarTarget.classList.toggle('d-none');
        this.maskTarget.classList.toggle('d-none');
    }
}