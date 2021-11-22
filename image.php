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
                    <p class="our-products">Single page</p>
                </div>
            </div>
            <div class="single-content">
                <div class="content-menu">
                    <ul>
                        <li class="content-menu-list"><a href="" class="content-menu-link">All</a></li>
                        <li class="content-menu-list"><a href="" class="content-menu-link">HOME</a></li>
                        <li class="content-menu-list"><a href="" class="content-menu-link">OFFICE</a></li>
                        <li class="content-menu-list"><a href="" class="content-menu-link">FURNITURE</a></li>
                        <li class="content-menu-list"><a href="" class="content-menu-link">MODERN</a></li>
                        <li class="content-menu-list"><a href="" class="content-menu-link">CLASSIC</a></li>
                    </ul>
                </div>
                <div class="single-product">
             
                    <?php
                        $imageID = $_GET['image_id'];
                        $link = mysqli_connect('localhost:3306', 'root', '', 'geekbrains');
                        if($link){
                            $query = "UPDATE images SET img_view_count=img_view_count+1 WHERE img_id=" . $imageID . ";";
                            mysqli_query($link, $query);
                            $query = "SELECT img_address, img_name, img_view_count FROM images WHERE img_id=" . $imageID . ";";
                            $result = mysqli_query($link, $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<img src=" . $row['img_address'] . $row['img_name'] . ' ' . "class=\"single-image\"></a>";
                                echo "<div class= \"wiews \">NUMBER OF WIEWS:<span class=\"count\">" . $row['img_view_count'] . "</span></div>";
                            };
                            mysqli_close($link);  
                        }
                        else{
                            die('Database connection error');
                        };
                    ?>

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