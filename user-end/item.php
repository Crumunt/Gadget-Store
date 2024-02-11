<?php
include "config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store something</title>

    <link rel="stylesheet" href="css/item.css">
    <script src="https://kit.fontawesome.com/986602f906.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php include "user-partials/header.php" ?>

    <?php

    $product_id = $_GET["id"];

    $sql = "SELECT * FROM products WHERE product_id=$product_id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $product_name = $row["product_name"];
            $product_image = $row["product_image"];
            $product_price = $row["product_price"];
            $product_quantity = $row["product_quantity"];
            $product_description = $row["product_description"];
        }
    }
    ?>

    <main>

        <div class="content-wrapper">
            <div class="topContent">
                <div class="image-wrapper">
                    <img src="images/products/<?php echo $product_image; ?>" alt="">
                </div>
                <div class="basicInfo-wrapper">
                    <div class="header">
                        <h1><?php echo $product_name; ?></h1>
                        <p class="price-quantity"><span>&#8369;<?php echo $product_price; ?></span> <span class="quantity"><?php echo $product_quantity ?> left</span></p>
                        <p class="desc"><span style="font-weight: 500;">Description:</span> <?php echo nl2br($product_description); ?></p>
                    </div>
                    <!-- <div class="desc-wrapper">
                            
                        </div> -->
                    <form action="#" class="action-form">
                        <label for="product_quantity">
                            Quantity: <img src="images/assets/minus-solid.svg" alt="" class="decrement"> <input type="tel" name="product_quantity" value="1"> <img src="images/assets/plus-solid.svg" alt="" class="increment">

                        </label>
                        <div class="button-wrapper">
                            <button>Add to Cart</button>
                            <button>Buy Now</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </main>


    <?php include "user-partials/footer.php"; ?>

</body>

</html>

<script>

const QUANTITY = document.querySelector('input[name="product_quantity"]');
const INCREMENT = document.querySelector('.increment');
const DECREMENT = document.querySelector('.decrement');


INCREMENT.addEventListener('click', ()=> {
    QUANTITY.value = Number(QUANTITY.value) + 1;
})

DECREMENT.addEventListener('click', ()=> {
    if(Number(QUANTITY.value) <= 1) {
        return;
    }
    QUANTITY.value = Number(QUANTITY.value) - 1;
})

</script>