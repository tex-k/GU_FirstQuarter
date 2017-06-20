<div class="CartProduct">
   <img src="Images/bg_product<?=$object->getID()?>.jpg" alt="" class="CartProduct__img">
    <div class="CartProduct__inf">
        <div class="CartProduct__name"><?=strtoupper($object->getName())?></div>
        <div class="CartProduct__param">Color:</div>
        <div class="CartProduct__value"><?=$object->getColor()?></div>
        <div class="CartProduct__param">Size:</div>
        <div class="CartProduct__value"><?=$object->getSize()?></div>
    </div>
    <a href="?c=cartpage&a=del&p=<?=$object->getID()?>" class="CartProduct__option CartProduct__option_5"></a>
    <div class="CartProduct__option CartProduct__option_4"><?='$' . ($price = $object->getPrice() * $object->getAmountPr())?></div>
    <div class="CartProduct__option CartProduct__option_3">FREE</div>
    <div class="CartProduct__option CartProduct__option_2"><?=$object->getAmountPr()?></div>
    <div class="CartProduct__option CartProduct__option_1"><?='$' . $object->getPrice()?></div>
</div>
