if(document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    updateCartTotal();
}




function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('mini-cart-products')[0];
    var cartRow = cartItemContainer.getElementsByClassName('cart-row');
    var total = 0;
    for(var i = 0; i < cartRow.length; i++) {
        var cartRowItem = cartRow[i];
        var priceElement = cartRowItem.getElementsByClassName('price')[0];
        var qtyElement = cartRowItem.getElementsByClassName('qty')[0];
        
        var price = parseFloat(priceElement.innerText.replace('Price: $', ''));
        var qty = parseInt(qtyElement.innerText.replace('Qty: ', ''));
        total += price * qty;
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('total-cart-price')[0].innerText = '$' + total;
}

function cartQtyPlus(value) {
    var qty = parseInt(document.getElementsByClassName('qty')[value].innerText);
    qty++;
    document.getElementsByClassName('qty')[value].innerText = qty;
    updateCartTotal();
}
function cartQtyMinus(value) {
    var qty = parseInt(document.getElementsByClassName('qty')[value].innerText);
    if(qty > 1) {
        qty--;
    }
    document.getElementsByClassName('qty')[value].innerText = qty;
    updateCartTotal();
}







