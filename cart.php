<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store Something</title>

    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/cart.js" defer></script>

</head>

<body>

    <header>
        <nav>
            <div class="logo-wrapper">
                <img src="images/logo.png" alt="Store logo - Axiom Discover Limitless Possibilities">
            </div>

            <form action="#" class="search-form">

                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>

            </form>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                <li><a href="account.php"><i class="fa fa-user fa-2x"></i></a></li>
            </ul>
        </nav>
    </header>


    <!-- <section class="cart-wrapper">


        <section class="checkout">

            <div class="left">
                <p>Number of Items: <span class="numberOfItems">0</span></p>
                <p>Total: &#8369;<span class="totalPrice">0</span></p>
            </div>
            <div class="right">
                <button class="checkout-button">Checkout</button>
            </div>
    
        </section>

        <table>
            <thead>
               <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
               </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <form action="#">
                            <input type="checkbox" name="item" id="product1">
                        </form>
                        <div class="product-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p>
                            PRODUCT NAME
                        </p>
                    </td>
                    <td>
                        <div class="quantity-wrapper">
                            <i class="fa fa-minus fa-2x"></i>
                            <div class="quantity">1</div>
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </td>
                    <td>
                        &#8369;<span class="product1">1299</span>
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="#">
                            <input type="checkbox" name="item" id="product2">
                        </form>
                        <div class="product-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p>
                            PRODUCT NAME
                        </p>
                    </td>
                    <td>
                        <div class="quantity-wrapper">
                            <i class="fa fa-minus fa-2x"></i>
                            <div class="quantity">1</div>
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </td>
                    <td>
                        &#8369;<span class="product2">1299</span>
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="#">
                            <input type="checkbox" name="item" id="">
                        </form>
                        <div class="product-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p>
                            PRODUCT NAME
                        </p>
                    </td>
                    <td>
                        <div class="quantity-wrapper">
                            <i class="fa fa-minus fa-2x"></i>
                            <div class="quantity">1</div>
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </td>
                    <td>
                        &#8369;1299
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="#">
                            <input type="checkbox" name="item" id="">
                        </form>
                        <div class="product-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p>
                            PRODUCT NAME
                        </p>
                    </td>
                    <td>
                        <div class="quantity-wrapper">
                            <i class="fa fa-minus fa-2x"></i>
                            <div class="quantity">1</div>
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </td>
                    <td>
                        &#8369;1299
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="#">
                            <input type="checkbox" name="item" id="">
                        </form>
                        <div class="product-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p>
                            PRODUCT NAME
                        </p>
                    </td>
                    <td>
                        <div class="quantity-wrapper">
                            <i class="fa fa-minus fa-2x"></i>
                            <div class="quantity">1</div>
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </td>
                    <td>
                        &#8369;1299
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="#">
                            <input type="checkbox" name="item" id="">
                        </form>
                        <div class="product-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p>
                            PRODUCT NAME
                        </p>
                    </td>
                    <td>
                        <div class="quantity-wrapper">
                            <i class="fa fa-minus fa-2x"></i>
                            <div class="quantity">1</div>
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </td>
                    <td>
                        &#8369;1299
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="#">
                            <input type="checkbox" name="item" id="">
                        </form>
                        <div class="product-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p>
                            PRODUCT NAME
                        </p>
                    </td>
                    <td>
                        <div class="quantity-wrapper">
                            <i class="fa fa-minus fa-2x"></i>
                            <div class="quantity">1</div>
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </td>
                    <td>
                        &#8369;1299
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </section> -->

    <main>
        <div class="cart-wrapper">
            <div class="cart-header">
                <div class="header">Product</div>
                <div class="header">Quantity</div>
                <div class="header">Price</div>
                <div class="header">Actions</div>
            </div>
            <div class="cart-items">
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product1">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product1">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product1">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product2">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product2">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product2">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product3">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product3">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product3">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product4">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product4">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product4">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product5">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product5">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product5">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product6">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product6">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product6">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product7">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product7">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product7">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product8">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product8">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product8">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product9">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product9">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product9">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
                <div class="item">
                    <div class="product-wrapper">
                        <input type="checkbox" name="product" id="product10">
                        <div class="image-wrapper">
                            <img src="images/pexels-canvy-mockups-205316.jpg" alt="">
                        </div>
                        <p class="product-name">PRODUCT NAME</p>
                    </div>
                    <div class="quantity-wrapper">
                        <i class="fa fa-minus fa-2x"></i>
                        <div class="quantity product10">1</div>
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                    <div class="price-wrapper">
                        &#8369;<span class="product10">1299</span>
                    </div>
                    <div class="action-wrapper">
                        <button>Remove</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="checkout">

            <div class="left">
                <p>Number of Items: <span class="numberOfItems">0</span></p>
                <p>Total: &#8369;<span class="totalPrice">0</span></p>
            </div>
            <div class="right">
                <button class="checkout-button">Checkout</button>
            </div>

        </div>
    </main>




    <footer>
        <div class="social-wrapper">
            <a href="#"> <img src="images/email.png" alt="Send us an email"></a>
            <a href="#"><img src="images/facebook.png" alt="Facebook Link"></a>
            <a href="#"><img src="images/instagram.png" alt="Instagram Link"></a>
        </div>

        <div class="copyright">
            <p>All Rights Reserved, Copyright &copy; 2024</p>
        </div>

        <div class="location-wrapper">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d422227.50765885855!2d105.65977353169933!3d-10.517921484080784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1704454815526!5m2!1sen!2sph"
                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>

</body>
</html>