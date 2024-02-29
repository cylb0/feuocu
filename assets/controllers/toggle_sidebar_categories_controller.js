import {Controller} from "@hotwired/stimulus";

export default class extends Controller {
    sidebar;
    connect() {
        this.sidebar = document.getElementById('sidebar-wrap');

        const mainCategories = document.getElementsByClassName('main-category');
        Array.from(mainCategories).forEach((category) => {
            category.addEventListener('click', (event) => {
                document.getElementById(category.getAttribute('data-target')).classList.toggle('d-none');
            })
        })
    }
    toggle() {
        this.sidebar.classList.toggle('d-none');
    }
    hide() {
        const childCategories = document.getElementsByClassName('child-category');
        Array.from(childCategories).forEach((category) => {
            category.classList.add('d-none');
        })
    }
}