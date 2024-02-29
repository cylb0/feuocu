import {Controller} from "@hotwired/stimulus";

export default class extends Controller {

    static targets = ['spinner'];
    data = {};
    tempData = {};
    selectedValues = [];
    depth = 0;
    numberOfOptions = -1;

    connect() {
        const productId = this.element.dataset.productId;
        this.spinnerTarget.style.display = 'block';
        fetch(`/shop/product/${productId}/options`,{
                method: 'GET'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Fail : ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                this.data = data;
                this.tempData = this.data.variants;
                this.numberOfOptions = Object.keys(this.data.options).length;

                this.spinnerTarget.style.display = 'none';

                if (this.tempData.hasOwnProperty('id')) {
                    this.enableSubmit(this.tempData);
                }

                // On fournit les valeurs au premier input
                this.populateDomOption();
            })
    }

    populateDomOption() {
        const optionList = this.data.options[Object.keys(this.data.options)[this.depth]].list;
        const optionName = this.data.options[Object.keys(this.data.options)[this.depth]]._meta.name;
        const optionType = this.data.options[Object.keys(this.data.options)[this.depth]]._meta.type;

        let optionContainer = document.createElement('div');
        optionContainer.setAttribute('id', `input-${optionName}`);
        optionContainer.classList.add('my-1');

        let optionTitle = document.createElement('h3');
        optionTitle.classList.add('option-name');
        optionTitle.innerHTML = `<b>${optionName}</b>`;
        optionContainer.appendChild(optionTitle);

        let optionField = document.createElement('div');
        optionField.classList.add('input-field');
        optionField.setAttribute('data-pos', (this.depth.toString()));

        if (optionType === 'dropdown') {

            let select = document.createElement('select');
            select.setAttribute('id', `input_${optionName}`);
            select.setAttribute('name', `${optionName}s`);
            select.classList.add(`${optionName}s`);

            let head_elem = document.createElement('option');
            head_elem.setAttribute('value', '');
            head_elem.textContent = `Choisir une ${optionName}`;
            head_elem.setAttribute('selected', true);
            head_elem.setAttribute('disabled', true);
            select.appendChild(head_elem);

            for (const key in this.tempData) {
                let elem = document.createElement('option');
                elem.setAttribute('value', key);
                elem.textContent = key;
                select.appendChild(elem);
            }
            optionField.appendChild(select);
        }

        if (optionType === 'color') {

            let inputColors = document.createElement('div');
            inputColors.setAttribute('id', `input_${optionName}s`);
            inputColors.classList.add('d-flex', 'flex-wrap');

            for (const key in this.tempData) {
                const optionData = optionList[key];

                let label = document.createElement('label');
                label.classList.add('me-3', 'gap-1');

                let input = document.createElement('input');
                input.setAttribute('type', 'radio');
                input.setAttribute('name', `input_${optionName}`);
                input.classList.add('me-1');
                input.setAttribute('value', optionData.value);
                input.setAttribute('required', true);

                let value = document.createElement('span');
                value.classList.add('me-1');
                value.innerHTML = optionData.value;

                let colorSpan = document.createElement('span');
                colorSpan.classList.add('d-inline-block', 'rounded-circle', 'me-1');

                colorSpan.style.backgroundColor = optionData.data;
                colorSpan.style.width = '25px';
                colorSpan.style.height = '25px';
                colorSpan.style.border = '1px solid lightgrey';

                label.appendChild(input);
                label.appendChild(value);
                label.appendChild(colorSpan);

                inputColors.appendChild(label);
            }
            optionField.appendChild(inputColors);
        }

        optionContainer.appendChild(optionField);

        this.element.appendChild(optionContainer);

        optionField.addEventListener('change', (event) => {
            this.handleInput(event, optionField);
        });
    }

    handleInput(event, field) {
        const currentPos = parseInt(field.getAttribute('data-pos'));
        const selectedValue = event.target.value;

        // Reset des variables si click ancien input
        if (currentPos < this.selectedValues.length) {
            this.depth = currentPos;
            this.selectedValues = this.selectedValues.slice(0, this.depth);
            this.tempData = this.data.variants;
            for (let i = 0; i < currentPos ; i++) {
                this.tempData = this.tempData[this.selectedValues[i]];
            }
            this.clearDom();
            this.disableSubmit();
        }

        this.selectedValues.push(selectedValue);

        if (this.depth+1 < this.numberOfOptions) {
            this.tempData = this.tempData[selectedValue];
            this.depth++;
            this.populateDomOption();
        } else {
            const variant = this.tempData[selectedValue];
            this.enableSubmit(variant);
        }
    }

    clearDom() {
        const inputFields = this.element.querySelectorAll('.input-field');
        for (let i = this.depth+1 ; i < inputFields.length; i++) {
            let parent = inputFields[i].parentNode;
            parent.remove();
        }
    }

    enableSubmit(variant) {
        console.log('enable');
        const priceElem = document.getElementById('price');
        const priceBeforeElem = document.getElementById('price-before');

        const price = this.data.prod.price + variant.price;

        if (this.data.prod.discount) {
            priceBeforeElem.innerHTML ='<s>' + price.toFixed(2).replace('.', ',') + ' €</s>';
            if (this.data.prod.discount.type === 'percentage') {
                const newPrice = (price * (parseFloat(100 - this.data.prod.discount.val) / 100)).toFixed(2).replace('.', ',');
                priceElem.innerHTML = newPrice + ' €';
            } else {
                const newPrice = (price - parseFloat(this.data.prod.discount.val)).toFixed(2).replace('.', ',');
                priceElem.innerHTML = newPrice + ' €';
            }
        } else {
            priceElem.innerHTML = price.toFixed(2).replace('.', ',') + ' €';
        }

        const submitElem = document.getElementById('quantity-submit');
        const inputElem  = submitElem.querySelector('input');
        const buttonElem = submitElem.querySelector('button');
        inputElem.setAttribute('max', variant.stock);
        buttonElem.setAttribute('data-variant', variant.id);
        submitElem.classList.remove('d-none');
        document.getElementById('priceRange').classList.add('d-none');
    }

    disableSubmit() {
        console.log('disable');
        const priceElem = document.getElementById('price');
        const priceBeforeElem = document.getElementById('price-before');

        const price = this.data.prod.price;

        if (this.data.prod.discount) {
            priceBeforeElem.innerHTML ='<s>' + price.toFixed(2).replace('.', ',') + ' €</s>';
            if (this.data.prod.discount.type === 'percentage') {
                const newPrice = (price * (parseFloat(100 - this.data.prod.discount.val) / 100)).toFixed(2).replace('.', ',');
                priceElem.innerHTML = newPrice + ' €';
            } else {
                const newPrice = (price - parseFloat(this.data.prod.discount.val)).toFixed(2).replace('.', ',');
                priceElem.innerHTML = newPrice + ' €';
            }
        } else {
            priceElem.innerHTML = price.toFixed(2).replace('.', ',') + ' €';
        }

        const submitElem = document.getElementById('quantity-submit');
        const inputElem  = submitElem.querySelector('input');
        const buttonElem = submitElem.querySelector('button');
        inputElem.setAttribute('min', 1);
        inputElem.setAttribute('max', 99);
        buttonElem.removeAttribute('data-variant');
        submitElem.classList.add('d-none');
        document.getElementById('priceRange').classList.remove('d-none');
    }
}