import {Controller} from "@hotwired/stimulus";

export default class extends Controller {

    fees = 12;
    vat = 20;
    static targets = ['nbItems', 'shippingFees', 'totalItem', 'total', 'totalHT', 'totalTTC', 'VAT', 'totalOrder']
    connect() {
        this.update();
    }
    update() {
        // NB Items :
        const quantityInputs = document.querySelectorAll('input[name="cart_item_quantity"]');
        let nbItems = 0;
        quantityInputs.forEach(input => {
            nbItems += parseInt(input.value);
        });
        this.nbItemsTarget.innerHTML = nbItems ? nbItems : '';

        // Total TTC :
        const totalItems = document.querySelectorAll('[id^="cart-total_"]');
        let totalTTC = 0;
        totalItems.forEach(item => {
            totalTTC += parseFloat((item.innerHTML));
        });
        this.totalTTCTarget.innerHTML = isNaN(totalTTC) ? '' : totalTTC.toFixed(2);

        // Total HT :
        this.totalHTTarget.innerHTML =
            isNaN(totalTTC / ((100 + this.vat) / 100)) ?
            '' :
            (totalTTC / ((100 + this.vat) / 100)).toFixed(2);

        // TVA :
        this.VATTarget.innerHTML =
            isNaN(totalTTC) ?
            '' :
            (totalTTC - (totalTTC / ((100 + this.vat) / 100))).toFixed(2);

        // Shipping Fees :
        this.shippingFeesTarget.innerHTML =
            isNaN(totalTTC) ?
            '' :
            (totalTTC >= 100 ? 'Offert' : this.fees + '€');

        // Total Avec Frais de port :
        this.totalOrderTarget.innerHTML =
            isNaN(totalTTC) ?
            '' :
            (totalTTC >= 100 ? totalTTC.toFixed(2) : (totalTTC + this.fees).toFixed(2));

    }
}