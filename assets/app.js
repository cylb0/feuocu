/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// You can specify which plugins you need
import { Tooltip, Toast, Popover } from 'bootstrap';

// start the Stimulus application
import './bootstrap';

import './slickcarousel';

window.addEventListener('load', () => {
    /*
    Listener du menu _sidebarcategories.html.twig
    */
    const parentCategories = document.querySelectorAll('.parent-category');
    parentCategories.forEach(function(parentCategory) {
        parentCategory.addEventListener('click', function(event) {
            event.preventDefault();
            // Toggle the visibility of the subcategories ul element
            const subcategories = parentCategory.nextElementSibling;
            if (subcategories.classList.contains('d-none')) {
                subcategories.classList.remove('d-none');
                subcategories.classList.add('d-block');
            } else {
                subcategories.classList.remove('d-block');
                subcategories.classList.add('d-none');
            }
        });
    });
});