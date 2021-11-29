<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&display=swap" rel="stylesheet"> 
    </head>

<body>
    <div class="conteiner">
        <div class="slider padding-site">
            <div class="header">
                <a href="index.html"><img src="img/logo.svg" alt="logo"></a>
                <div class="header_cart_link">
                    <a href="cart.php"><img src="img/cart.png" alt="cart" class="header_cart"></a>
                </div>
            </div>
            <div class="our-products-heaing">
                <p class="our-products">Cart</p>
            </div>
        </div>
        <div class="content">
            <div class="cart-products clearfix">
             
                <?php
                    session_start();
                    if(isset($_SESSION['userID'])){
                        require_once 'db.php';
                        global $DBLink;
                        if(empty(($_SESSION['cart']))){
                            echo "<div class=\"empty-cart\">Cart is empty</div>
                                  <div class=\"account-button\">
                                        <form method=\"GET\" action=\"/catalog.php\">
                                            <input class=\"button-catalog\" type=\"submit\" value=\"Catalog\">
                                        </form>
                                    </div>'";
                        }
                        else{
                            $counted = array_count_values($_SESSION['cart']);
                            $_SESSION['cartUnique'] = array_unique($_SESSION['cart']);
                            foreach($_SESSION['cartUnique'] as $product_id){
                                $query = "SELECT i.id, i.address, i.name, p.id, p.title, p.price FROM images AS i JOIN products AS p ON i.id = p.image_id WHERE p.id = '" . $product_id . "';";
                                $result = mysqli_query($DBLink, $query);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<div class=\"cart-product\">
                                                <a target=\"_blanc\" href=\"image.php?image_id=" . $row['id'] . '"' .                       "class=\"cart-product-image\"><img src=" . $row['address'] . $row['name'] . ' ' . "class=\"section3-outline\">
                                                </a>
                                                <div class=\"cart-product-info\">
                                                    <div class=\"cart-product-title\">$row[title]</div>
                                                    <div class=\"car-product-price\">$row[price]<span>$</span></div>
                                                </div>
                                                <div class=\"cart-product-quantity\">Quantity: " . $counted[$product_id] ."</div>
                                            </div>";
                                };
                            };
                        };
                    }
                    else {
                        header('location: /login.php');
                    };
                    ?>
                    
            </div>
            <a href="cart.php">
                <div class="arrows"> </div>
            </a>

                <?php
                if(!empty(($_SESSION['views']))){
                    echo "<div class=\"previous-products-title\">Previously viewed</div>
                          <div class=\"previous-products\"> "; 
                    $_SESSION['viewsUnique'] = array_slice(array_unique($_SESSION['views']), 0, 5);
                    foreach($_SESSION['viewsUnique'] as $product_id){
                        if(empty($_SESSION['cartUnique'])){
                            $query = "SELECT i.id, i.address, i.name, p.id, p.title, p.price FROM images AS i JOIN products AS p ON i.id = p.image_id WHERE p.id = '" . $product_id . "';";
                            $result = mysqli_query($DBLink, $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo " <div class=\"previous-product\"><a target=\"_blanc\" href=\"image.php?image_id=" . $row['id'] . '"' . "class=\"previous-product-image\"><img src=" . $row['address'] . $row['name'] . ' ' . "class=\"section3-outline previous-image\"></a>
                                            <div class=\"previous-product-info\">
                                                <div class=\"product-title\">$row[title]</div>
                                                <div class=\"product-price\">$row[price]<span>$</span></div>
                                            </div>
                                        </div>";
                            };
                        }
                        else if(in_array($product_id, $_SESSION['cartUnique'])){
                            continue;
                        } else {
                            $query = "SELECT i.id, i.address, i.name, p.id, p.title, p.price FROM images AS i JOIN products AS p ON i.id = p.image_id WHERE p.id = '" . $product_id . "';";
                            $result = mysqli_query($DBLink, $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div class=\"previous-product\"><a target=\"_blanc\" href=\"image.php?image_id=" . $row['id'] . '"' . "class=\"previous-product-image\"><img src=" . $row['address'] . $row['name'] . ' ' . "class=\"section3-outline previous-image\"></a>
                                        <div class=\"previous-product-info\">
                                            <div class=\"product-title\">$row[title]</div>
                                            <div class=\"product-price\">$row[price]<span>$</span></div>
                                        </div>
                                    </div>";
                            };
                        };
                    };
                    echo "</div>";
                };     
    
                ?>

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