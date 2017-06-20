<section class="newArrivals">
    <h2 class="newArrivals__h2">newArrivals</h2>
    NEW ARRIVALS
</section>
<section class="CartProducts">
    <div class="CartProducts__title">
        <div class="CartProducts__h3">PRODUCT DETAILS</div>
        <div class="CartProducts__option">ACTION</div>
        <div class="CartProducts__option">SUBTOTAL</div>
        <div class="CartProducts__option">SHIPPING</div>
        <div class="CartProducts__option">QUANTITY</div>
        <div class="CartProducts__option">UNITE PRICE</div>
    </div>
    <div class="CartLine"></div>

    <?=$object?>

        <a href="../www/?c=cartpage&a=clear&p" class="CartClear">CLEAR SHOPPING CART</a>
        <div class="CartCheckout">
            <div class="CartGrandtotal">
                <div class="CartGrandtotal__text">GRAND TOTAL</div>
                <div class="CartGrandtotal__price">
                    <?=$param?>
                </div>
            </div>
            <div class="clr"></div>
            <div class="CartCheckout__line"></div>
            <button class="CartCheckout__button">PROCEED TO CHECKOUT</button>
        </div>
</section>
<div class="clr"></div>
