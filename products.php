<?php

include "config/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store something</title>

    <link rel="stylesheet" href="css/product.css">
    <script src="https://kit.fontawesome.com/986602f906.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php include "user-partials/header.php" ?>


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
                                    <a href="item.php?id=<?php echo $product_id ?>"><button class="viewItem">View Item</button></a>
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

                                    <div class="product">
                                        <img src="images/products/<?php echo $product_image; ?>" alt="product image">
                                        <div class="overlay">
                                            <div class="overlay-text">
                                                <p><?php echo $product_name ?></p>
                                                <a href="item.php?id=<?php echo $product_id ?>"><button class="viewItem">View Item</button></a>
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
                }
            }
        }

        ?>

    </section>


    <?php include "user-partials/footer.php"; ?>

</body>

</html>

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