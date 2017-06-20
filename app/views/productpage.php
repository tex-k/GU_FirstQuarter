<section class="newArrivals">
    <h2 class="newArrivals__h2">newArrivals</h2>
    NEW ARRIVALS
</section>
<!--
<section class="SingleSlider">
    
</section>
-->
<!--<h2 class="subscribeArticle__h2">subscribeArticle</h2>-->
<!--    <div class="SingleSlider__img"></div>-->
<section class="SingleSlider">
    <img class="img_prod" src="Images/bg_product<?=$object->getID()?>.jpg" alt="">
    <div class="prod_info">
        <h3><?=$object->getName()?></h3>
        <p>Color: </p>
        <p><?=$object->getColor()?></p>
        <br>
        <p>Size: </p>
        <p><?=$object->getSize()?></p>
        <br>
        <p>Price: </p>
        <p>$<?=$object->getPrice()?></p>
        <div class="clr"></div>
        <a href="?c=cartpage&a=add&p=<?=$object->getID()?>" class="collection__addToCart">
                <span class="collection__cart"></span>
                Add to Cart
    </a>
    </div>
</section>

<div class="clr"></div>
