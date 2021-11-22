<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Our Products Range</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&display=swap" rel="stylesheet"> </head>

<body>
<div class="conteiner">
        <div class="slider padding-site">
            <div class="header clearfix">
                <a href="index.html"><img src="img/logo.svg" alt="logo"></a>
                <ul class="menu clearfix">
                    <li class="menu-list"><a href="index.html" class="menu-link">HOME</a></li>
                    <li class="menu-list"><a href="catalog.html" class="menu-link">PRODUCTS</a></li>
                    <li class="menu-list"><a href="" class="menu-link">HISTORY</a></li>
                    <li class="menu-list"><a href="product.html" class="menu-link">SHOWROOM</a></li>
                    <li class="menu-list"><a href="contact.html" class="menu-link">CONTACT</a></li>
                    <li class="menu-list">
                        <a href="" class="menu-link"><img src="img/search.svg" alt="search"></a>
                    </li>
                </ul>
            </div>
            <div class="our-products-heaing">
                <p class="our-products">Our Products Range</p>
            </div>
        </div>
        <div class="content">
            <div class="content-menu clearfix">
                <ul>
                    <li class="content-menu-list"><a href="" class="content-menu-link content-menu-link-all">All</a></li>
                    <li class="content-menu-list"><a href="" class="content-menu-link">HOME</a></li>
                    <li class="content-menu-list"><a href="" class="content-menu-link">OFFICE</a></li>
                    <li class="content-menu-list"><a href="" class="content-menu-link">FURNITURE</a></li>
                    <li class="content-menu-list"><a href="" class="content-menu-link">MODERN</a></li>
                    <li class="content-menu-list"><a href="" class="content-menu-link">CLASSIC</a></li>
                </ul>
            </div>
            <div class="products clearfix">
             
                <?php
                    $images = [];
                    $dirImgs = scandir('./img/products');
                    foreach($dirImgs as $fileImg){
                        if($fileImg != '.' && $fileImg != '..'){
                            $images[] = $fileImg;
                        };
                    };
                    foreach($images as $image){
                        echo "<a target=\"_blanc\" href=\"img/products/" . $image ."\" class=\"product\"><img src=img/products/" .$image . " class=\"section3-outline\"></a>";
                    };
                ?>
          
           </div>
            <a href="catalog.html">
                <div class="arrows"> </div>
            </a>
            <div class="section2">
                <div class="section2-product1 clearfix">
                    <p class="section2-exclusive">exclusive</p>
                    <h2 class="section2-heading">Fishnet Chair</h2>
                    <p class="section2-content">Seat and back with upholstery made of&nbsp;cold cure foam. Steel frame, available in&nbsp;matt</p> <a href="" class="button section2-button">Order Us</a> </div>
                <div class="section2-product2">
                    <p class="section2-exclusive">exclusive</p>
                    <h2 class="section2-heading">Fishnet Chair</h2>
                    <p class="section2-content">Seat and back with upholstery made of&nbsp;cold cure foam. Steel frame, available in&nbsp;matt</p> <a href="" class="button section2-button">Order Us</a> </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
    <div class="footer">
        <div class="footer-heading">
            <div class="footer-contact">
                <p class="contact">Contact Us</p>
            </div>
            <div class="footer-information">
                <p class="information">Useful Information</p>
            </div>
            <div class="footer-stay clearfix">
                <p class="stay">Let&rsquo;s Stay in&nbsp;Touch!</p>
            </div>
        </div>
        <div class="footer-text clearfix">
            <div class="footer-adress">
                <p class="adress">132A Bridge Road Richmond VIC&nbsp;Australia.</p>
                <br>
                <p class="talk-to-us">Talk to&nbsp;us on&nbsp;1300&nbsp;132 `
                    <br>info@interior.com</p>
            </div>
            <div class="footer-text-information">
                <ul class="text-information">
                    <li class="text-information-list"><a href="#" class="text-information-link">Sales terms</a></li>
                    <li class="text-information-list"><a href="#" class="text-information-link">Customer care</a></li>
                    <li class="text-information-list"><a href="#" class="text-information-link">Delivery</a></li>
                </ul>
            </div>
            <div class="footer-text-information2">
                <ul class="text-information2">
                    <li class="text-information2-list"><a href="#" class="text-information-link">Architect accounts</a></li>
                    <li class="text-information2-list"><a href="#" class="text-information-link">Careers</a></li>
                    <li class="text-information2-list"><a href="#" class="text-information-link">Exchanges &amp;&nbsp;returns</a></li>
                </ul>
            </div>
            <div class="footer-subcribe clearfix">
                <p class="subcribe">Suscribe to&nbsp;know about our latest news, products and special offers just for suscribers.</p>
                <div class="footer-email">
                    <input type="email" class="email" placeholder="your email address">
                    <input type="image" class="plane" src="img/plane.png" alt="plane"> </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="copyright">
                <p class="copy">&copy;&nbsp;Copyright&nbsp;&mdash; INTERIOR 2016. All Rights Reserved.</p>
            </div>
            <div class="social-network">
                <a href="#"><img src="img/facebook.png" alt="facebook" class="icon icon-facebook"></a>
                <a href="#"><img src="img/twitter.png" alt="twitter" class="icon icon-twitter"></a>
                <a href="#"><img src="img/google.png" alt="google" class="icon icon-google"></a>
                <a href="#"><img src="img/pinterest.png" alt="pinterest" class="icon icon-pinterest"></a>
            </div>
            <div class="footer-privacy">
                <p class="privacy">Terms &amp;&nbsp;Conditions&nbsp;/ Privacy policy &amp;&nbsp;Cookies</p>
            </div>
        </div>
    </div>
</body>

</html>