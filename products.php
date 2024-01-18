<?php

include "config/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store Something</title>


    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


    <section class="categories">


        <?php
        $category_sql = "SELECT * FROM category";
        $category_result = mysqli_query($conn, $category_sql);

        if ($category_result) {

            if (mysqli_num_rows($category_result) > 0) {
                while ($row = mysqli_fetch_assoc($category_result)) {

                    $category_name = $row["category_name"];

        ?>
                    <button class="category" id="<?php echo $category_name ?>"><?php echo $category_name ?></button>

        <?php
                }
            }
        }
        ?>

        <!-- <button class="category" id="mobile">Mobile</button>
        <button class="category" id="laptop">Laptops</button>
        <button class="category" id="tablet">Tablets</button>
        <button class="category" id="pc">PC</button>
        <button class="category" id="accessories">Accessories</button> -->

    </section>

    <section class="products">

        <div class="products-wrapper active" id="all">

            <?php

            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);

            if ($result) {

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $product_name = $row["product_name"];
                        $product_id = $row["product_id"];
                        $product_image = $row["product_image"];

            ?>
                        <div class="product">
                            <img src="images/products/<?php echo $product_image; ?>" alt="product image">
                            <div class="overlay">
                                <div class="overlay-text">
                                    <p><?php echo $product_name ?></p>
                                    <a href="item.php?item=<?php echo $product_id ?>"><button class="viewItem">View Item</button></a>
                                </div>
                            </div>
                        </div>

            <?php


                    }
                }
            }

            ?>
        </div>

        <?php

        $sql = "SELECT * FROM category";

        $result = mysqli_query($conn, $sql);


        if ($result) {
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                    $category_id = $row["category_id"];
                    $category_name = $row["category_name"];

                    $product_sql = "SELECT * FROM products WHERE category_id=$category_id";

                    $product_result = mysqli_query($conn, $product_sql);

        ?>
                    <div class="products-wrapper" id="<?php echo $category_name ?>">
                        <?php
                        if ($product_result) {
                            if (mysqli_num_rows($product_result) > 0) {

                                while ($row = mysqli_fetch_assoc($product_result)) {

                                    $product_name = $row["product_name"];
                                    $product_image = $row["product_image"];
                                    $product_id = $row["product_id"];
                        ?>
                                    <!-- <div class="products-wrapper" id="<?php echo $category_name ?>"> -->

                                    <div class="product">
                                        <img src="images/products/<?php echo $product_image; ?>" alt="product image">
                                        <div class="overlay">
                                            <div class="overlay-text">
                                                <p><?php echo $product_name ?></p>
                                                <a href="item.php?item=<?php echo $product_id ?>"><button class="viewItem">View Item</button></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- </div> -->
                        <?php
                                }
                            }
                        }

                        ?>
                    </div>
        <?php
                }
            }
        }

        ?>

        <!-- <div class="products-wrapper" id="mobile">



        </div>

        <div class="products-wrapper" id="laptop">


        </div>

        <div class="products-wrapper" id="tablet">



        </div>

        <div class="products-wrapper" id="pc">



        </div>

        <div class="products-wrapper" id="accessories">



        </div> -->

    </section>


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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d422227.50765885855!2d105.65977353169933!3d-10.517921484080784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1704454815526!5m2!1sen!2sph" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>

</body>

<script>
    let lastCategory = null

    const CATEGORIES = document.querySelectorAll('.category');

    CATEGORIES.forEach(category => category.addEventListener('click', () => {
        category.classList.toggle('active');
        document.querySelector(`div#${category.id}`).classList.toggle('active')

        if (lastCategory == null) {
            document.querySelector('div#all').classList.toggle('active')
            lastCategory = category;
        } else {
            if (lastCategory == category) {
                document.querySelector('div#all').classList.toggle('active')
                lastCategory = null
                return
            }

            document.querySelector(`div#${lastCategory.id}`).classList.toggle('active')
            lastCategory.classList.toggle('active');
            lastCategory = category
        }


    }))
</script>

</html>