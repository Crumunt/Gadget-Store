<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store - Admin</title>

    <!-- css link -->
    <link rel="stylesheet" href="../css/admin.css">
    <!-- <link rel="stylesheet" href="../css/admin-products.css"> -->
    <link rel="stylesheet" href="../css/variables.css">
    <script src="https://kit.fontawesome.com/986602f906.js" crossorigin="anonymous"></script>
    <script src="../js/admin.js" defer></script>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a <?= ($activePage == 'index') ? 'active':''; ?> href="index.php">Dashboard</a></li>
                <li><a <?= ($activePage == 'manage-admin') ? 'active':''; ?> href="manage-admin.php">Admin</a></li>
                <li><a <?= ($activePage == 'manage-products') ? 'active':''; ?> href="manage-products.php">Products</a></li>
                <li><a <?= ($activePage == 'manage-categories') ? 'active':''; ?> href="manage-categories.php">Catergories</a></li>
                <li><a <?= ($activePage == 'manage-orders') ? 'active':''; ?> href="manage-orders.php">Orders</a></li>
            </ul>
        </nav>
    </header>



