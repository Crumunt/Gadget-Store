<?php

$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/header.php";
?>

<?php
    $sql_admin = "SELECT * FROM admin";
    $sql_product = "SELECT * FROM products";
    // $sql_order = "SELECT COUNT(*) AS Row_Count FROM orders";

    $result = mysqli_query($conn, $sql_admin);
    if($result) {
        $admin_count = mysqli_num_rows($result);
    }else {
        $admin_count = 0;
    }

    $result -> free_result();

    $result = mysqli_query($conn, $sql_product);

    if($result) {
        $product_count = mysqli_num_rows($result);
    }else {
        $product_count = 0;
    }

    $result -> free_result();

?>

<div class="header-wrapper">
    <h1 class="dash">DASHBOARD</h1>
</div>

<main class="dashboard">
    <div class="box-wrapper">
        <div class="top">
            <i class="fa-solid fa-users fa-lg"></i>
            <span><?php echo$admin_count;?></span>
        </div>
        <div class="bottom">admins</div>
    </div>
    <div class="box-wrapper">
        <div class="top">
            <i class="fa-solid fa-boxes-stacked fa-lg"></i>
            <span><?php echo$product_count;?></span>
        </div>
        <div class="bottom">products</div>
    </div>
    <div class="box-wrapper">
        <div class="top">
            <i class="fa-solid fa-cart-shopping fa-lg"></i>
            <span>5</span>
        </div>
        <div class="bottom">orders</div>
    </div>
</main>

<?php include "partials/footer.php"; ?>