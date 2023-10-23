var removeCartItembuttons=  document.getElementsByClassName('delete-item')
console.log("removeCartItembuttons")
for (var i = 0; i < removeCartItembuttons.length; i++) {
    var button =removeCartItembuttons[i]
    button.addEventListener('click',function(event) {
       var buttonClicked = event.target
        buttonClicked.parentElement. parentElement.parentElement.remove()
        UpdateSubTotal()
        UpdateCartTotal()
    })
}
var quantityinputs= document.getElementsByClassName('cart-quantity-input')
for (var i = 0; i < quantityinputs.length; i++) {
    var input =quantityinputs[i]   
    input.addEventListener('change',quantityChanged)
    UpdateSubTotal()
    UpdateCartTotal()
}
function quantityChanged(event) {
    var input=event.target
    if (isNaN(input.value) || input.value<=0) {
        input.value=1
    }
    UpdateSubTotal()
    UpdateCartTotal()
}
var containerinputs= document.getElementsByClassName('cart-container-input')
for (var i = 0; i < containerinputs.length; i++) {
    var input =quantityinputs[i]   
    input.addEventListener('change',containerChanged)
}
function containerChanged(event) {
    var input=event.target
    if (isNaN(input.value) || input.value<=0) {
        input.value=1
    }
    UpdateSubTotal()
    UpdateCartTotal()
}
var addtoCartbuttons= document.getElementsByClassName('bascketadd')
for (var i = 0; i < addtoCartbuttons.length; i++) {
    var input =addtoCartbuttons[i]   
    input.addEventListener('change',addtoCartclicked)
}
function addtoCartclicked(event) {
    var button=event.target
    var shopItem=button.parentElement.parentElement.parentElement.parentElement
    var title=shopItem.getElementsByClassName('productTitle')[0].innerText
    console.log(title)
}

function UpdateCartTotal() {
    var total=0
    var subTotals= Array.from(document.getElementsByClassName('item-container-subtotalprice'));
    var [totalElement]=Array.from(document.getElementsByClassName('cart-total-price'));
    total = subTotals.reduce((a, c) => a + parseFloat(c.innerText.replace('$', '')) , 0)
    totalElement.innerText  = `$${Math.floor(total)}`;
}

function UpdateSubTotal() {
    var [cartItemContainer] = Array.from(document.getElementsByClassName('cart-item-allshop'));
    var cartRows = Array.from(cartItemContainer.getElementsByClassName('cart-item-all'));    
    var subtotal = 0
    cartRows.forEach((cartRow)=> {
        var [priceElement] = Array.from(cartRow.getElementsByClassName('item-container-price'));
        var [quantityElement] =Array.from(cartRow.getElementsByClassName('cart-quantity-input'));
        var [subTotal] = Array.from(cartRow.getElementsByClassName('item-container-subtotalprice'));
        var price = parseFloat(priceElement.innerText.replace('$' ,''));
        var quantity =parseInt(quantityElement.value, 10);
        var [containerElement] = Array.from(cartRow.getElementsByClassName('cart-container-input'));
        var container =parseInt(containerElement.value, 10);
        subtotal=price*quantity*container
        subTotal.innerText='$'+subtotal
    });
}

