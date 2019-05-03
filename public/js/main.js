
var cartId = [];
var cartPrices = [];
var totalPrice = 0;

function addItemToCart(key,price) {

    

    if (isItemSelected(key)) {
        console.log("item already selected");
        removeItemFromCart(key);
    } else {
        cartId.push(key);
        cartPrices.push(price);
    }

    updateButtonLanjutkan();
    checkCheckbox(key);
    updateSelectCardItem(key);
    updateCart();

 
   console.log(cartId);
   console.log(cartPrices);
   
}

function isItemSelected(key) {
    return cartId.includes(key);
}

function checkCheckbox(key) {
    if($('#item-cb-'+key).prop('checked') == true) {
        $('#item-cb-'+key).prop('checked', false);
    } else {
        $('#item-cb-'+key).prop('checked', true);
    }
}

function removeItemFromCart(key) {
    var index = cartId.indexOf(key);
    cartId.splice(index,1);
    cartPrices.splice(index,1);
}

function updateCart() {
    totalPrice = 0;
    cartPrices.forEach(element => {
        totalPrice = totalPrice + element;
    });
    $("#total-price").text(totalPrice);
}

function updateSelectCardItem(key) {
    $('#item-'+key).toggleClass('card-item-selected',2000);
}

function updateButtonLanjutkan() {
    if (cartId.length == 0) {
        $('#btn-service-lanjut').removeClass('btn-primary-gradient',2000);
        $('#btn-service-lanjut').addClass('btn-disable',2000);
    } else {
        $('#btn-service-lanjut').removeClass('btn-disable',2000);
        $('#btn-service-lanjut').addClass('btn-primary-gradient',2000);
    }
}




$(document).ready(function() {
    updateCart();
    totalPrice = 0;
})




// ORDER DETAIL
function changeAddressDetail() {
    var name = $('#input-order-name').val();
    var city = $('#input-order-city').val();
    var address = $('#input-order-address').val();

    console.log(name + city + address);
    


    $('#text-order-name').html(name);
    $('#text-order-city').html(city);
    $('#text-order-address').html(address);

    $('#editAddress').modal('hide');

}

