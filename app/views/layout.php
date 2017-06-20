<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles/style.css">
    <!--    <link type="text/css" rel="stylesheet" href="style.css" />-->
    <title>Document</title>
</head>

<body>
    <header class="header">
        <a href="../www/" class="header__logo logo">
            <div class="logo__img"></div>
            <div class="logo__text1">BRAN</div>
            <div class="logo__text2">D</div>
        </a>
        <form method="post" class="searchForm">
            <div class="searchForm__browse">
                Browse
                <div class="searchForm__list"></div>
                <div class="searchFormDrop">
                    <h3 class="searchFormDrop__h3">WOMEN</h3>
                    <div class="searchFormDrop__line"></div>
                    <ul class="searchFormMenu">
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Dresses</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Tops</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Sweaters/Knits</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Jackets/Coats</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Blazers</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Denim</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Leggings/Pants</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Skirts/Shorts</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Accessories </a></li>
                    </ul>
                    <h3 class="searchFormDrop__h3">MEN</h3>
                    <div class="searchFormDrop__line"></div>
                    <ul class="searchFormMenu">
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Tees/Tank tops</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Shirts/Polos</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Sweaters</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Sweatshirts/Hoodies</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Blazers</a></li>
                        <li class="searchFormMenu__list"><a href="#" class="searchFormMenu__link">Jackets/vests</a></li>
                    </ul>
                </div>
            </div>
            <input type="text" placeholder="Search for Item..." class="searchForm__input">
            <button class="searchForm__button">
                <span class="searchForm__loupe"></span>
            </button>
        </form>
        <div class="cart">
            <a href="../www/?c=userpage&a&p" class="myAccount">
                My Account
            </a>
            <a href="../www/?c=cartpage&a&p" class="cart__img"></a>
            
        </div>
    </header>

    <div class="content">
        <?=$content?>
    </div>

    <section class="subscribe">
        <h2 class="subscribe__h2">subscribe</h2>
        <article class="subscribeArticle">
            <h2 class="subscribeArticle__h2">subscribeArticle</h2>
            <div class="subscribeArticle__face"></div>
            <p class="subscribeArticle__p">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”</p>
            <div class="subscribeArticle__name1">Bin Burhan</div>
            <div class="subscribeArticle__name2">Dhaka, Bd</div>
        </article>
        <h2 class="subscribe__h2">SUBSCRIBE</h2>
        <p class="subscribe__p">FOR OUR NEWLETTER AND PROMOTION</p>
        <form method="post" class="subscribeForm">
            <input type="text" class="subscribeForm__input" placeholder="Enter Your Email">
            <button class="subscribeForm__button">Subscribe</button>
        </form>
    </section>

    <footer class="footer">
        <div class="footerInf">
            <div class="footerText">
                <a href="../www/" class="footerText__logo logo">
                    <div class="logo__img"></div>
                    <div class="logo__text1">BRAN</div>
                    <div class="logo__text2">D</div>
                </a>
                <div class="clr"></div>
                <p class="footerText__p_1">
                    Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships.
                </p>
                <p class="footerText__p_2">
                    Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize superior initiatives for wireless technologies. Dynamically optimize.
                </p>
            </div>
            <nav class="footerMenu">
                <h3 class="footerMenu__h3">COMPANY</h3>
                <ul class="bottomMenu">
                    <li class="bottomMenu__list"><a href="../www/" class="bottomMenu__link">Home</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Shop</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">About</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">How It Works</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Contact</a></li>
                </ul>
            </nav>
            <nav class="footerMenu">
                <h3 class="footerMenu__h3">INFORMATION</h3>
                <ul class="bottomMenu">
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Tearms &amp; Condition</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Privacy Policy</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">How to Buy</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">How to Sell</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Promotion</a></li>
                </ul>
            </nav>
            <nav class="footerMenu">
                <h3 class="footerMenu__h3">SHOP CATEGORY</h3>
                <ul class="bottomMenu">
                    <li class="bottomMenu__list"><a href="" class="bottomMenu__link">Men</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Women</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Child</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Apparel</a></li>
                    <li class="bottomMenu__list"><a href="#" class="bottomMenu__link">Brows All</a></li>
                </ul>
            </nav>
        </div>
        <div class="clr"></div>
        <div class="copy">
            © 2017 Brand All Rights Reserved.
            <div class="icons">
                <a href="https://plus.google.com/collections/featured" class="icons__icon icons__icon_5"></a>
                <a href="https://ru.pinterest.com/" class="icons__icon icons__icon_4"></a>
                <a href="https://www.linkedin.com/" class="icons__icon icons__icon_3"></a>
                <a href="https://twitter.com/" class="icons__icon icons__icon_2"></a>
                <a href="https://ru-ru.facebook.com/" class="icons__icon icons__icon_1"></a>
            </div>
        </div>
    </footer>
</body>

</html>
