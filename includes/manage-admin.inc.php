<?php

include "../classes/dbh.class.php";
include "../classes/admin.class.php";
include "../classes/admin-contr.class.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = filter_input(INPUT_POST, 'admin_fullname', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'admin_username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'admin_password', FILTER_SANITIZE_SPECIAL_CHARS);

    $adminContr = new AdminContr();

    $adminContr->addAdmin($fullname, $username, $password);

    session_start();

    $_SESSION["add"] = "Admin Added Sucessfully";
    $_SESSION["state"] = "success";

    header("location: ../admin/manage-admin.php");
}

if (isset($_GET["id"])) {

    $adminContr = new AdminContr();

    
    $admin_id = $_GET["id"];
    
    $adminContr->delAdmin($admin_id);

    session_start();

    $_SESSION["add"] = "Admin Removed Sucessfully";
    $_SESSION["state"] = "success";
    header("location: ../admin/manage-admin.php");

}
