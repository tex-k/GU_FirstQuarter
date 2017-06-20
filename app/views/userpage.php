<section class="newArrivals">
    <h2 class="newArrivals__h2">newArrivals</h2>
    NEW ARRIVALS
</section>

<div class="user_info">
    <p>login: </p>
    <p><?=$object->getName()?></p>
    <br>
    <p>password: <?=$object->getPassword()?></p>
    <br>
    <a class="authCart" href="../www/?c=cartpage&a&p">Cart</a>    
    <a class="authOut" href="?c=authpage&a=out&p">Logout</a>  
</div>
