<a href="?c=prodpage&a&p=<?=$object->getID()?>" class="product">
    <div class="product__img product__img_<?=$object->getID()?>"></div>
    <object>
                    <a href="?c=cartpage&a=add&p=<?=$object->getID()?>" class="product__toCart">
                        <div class="product__cart"></div>
                        <span class="product__cartText">Add to Cart</span>
                    </a>
    </object>
    <div class="product__text">
        <div class="product__name"><?=strtoupper($object->getName())?></div>
        <div class="product__price"><?='$' . $object->getPrice()?></div>
    </div>
</a>
