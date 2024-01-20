<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store something</title>

    <link rel="stylesheet" href="css/cart.css">
    <script src="js/cart.js" defer></script>
    <script src="https://kit.fontawesome.com/986602f906.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php include "user-partials/header.php" ?>

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
                            <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                            <div class="quantity">1</div>
                            <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                            <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                            <div class="quantity">1</div>
                            <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                            <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                            <div class="quantity">1</div>
                            <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                            <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                            <div class="quantity">1</div>
                            <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                            <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                            <div class="quantity">1</div>
                            <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                            <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                            <div class="quantity">1</div>
                            <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                            <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                            <div class="quantity">1</div>
                            <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product1">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product2">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product3">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product4">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product5">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product6">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product7">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product8">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product9">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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
                        <img src="images/assets/minus-solid.svg" alt="" class="decrement">
                        <div class="quantity product10">1</div>
                        <img src="images/assets/plus-solid.svg" alt="" class="increment">
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


    <?php include "user-partials/footer.php"; ?>

</body>

</html>