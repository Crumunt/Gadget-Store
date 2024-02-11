<?php

$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../classes/dbh.class.php";
include "../classes/model/dashboard.class.php";
include "../classes/view/dashboard-view.class.php";
include "../partials/header.php";

    $dashboardView = new DashboardView();

?>

<div class="header-wrapper">
    <h1 class="dash">DASHBOARD</h1>
</div>

<main class="dashboard">
    <div class="box-wrapper">
        <div class="top">
            <i class="fa-solid fa-users fa-lg"></i>
            <span><?php echo $dashboardView->fetchAdminCount();?></span>
        </div>
        <div class="bottom">admins</div>
    </div>
    <div class="box-wrapper">
        <div class="top">
            <i class="fa-solid fa-boxes-stacked fa-lg"></i>
            <span><?php echo $dashboardView->fetchProductCount();?></span>
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