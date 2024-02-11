<?php

include "../classes/dbh.class.php";
include "../classes/model/adminModel.php";
include "../classes/controller/adminController.php";

$adminContr = new AdminContr();

// if(isset($_POST["updateAdmin"])) {


//     $admin_id = $_POST["id"];
//     $fullname = $_POST["full_name"];
//     $username = $_POST["username"];


//     $adminContr->updateAdmin($fullname, $username, $admin_id);

//     session_start();

//     $_SESSION["add"] = "Admin Updated Sucessfully";
//     $_SESSION["state"] = "success";

//     header("location: ../manage-admin.php");
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save_admin"])) {

//     $fullname = filter_input(INPUT_POST, 'admin_fullname', FILTER_SANITIZE_SPECIAL_CHARS);
//     $username = filter_input(INPUT_POST, 'admin_username', FILTER_SANITIZE_SPECIAL_CHARS);
//     $password = filter_input(INPUT_POST, 'admin_password', FILTER_SANITIZE_SPECIAL_CHARS);

//     $adminContr->addAdmin($fullname, $username, $password);

//     session_start();

//     $_SESSION["add"] = "Admin Added Sucessfully";
//     $_SESSION["state"] = "success";

//     header("location: ../manage-admin.php");
// }

// if (isset($_GET["removeId"])) {

//     $admin_id = $_GET["removeId"];

//     $adminContr->delAdmin($admin_id);

//     session_start();

//     $_SESSION["add"] = "Admin Removed Sucessfully";
//     $_SESSION["state"] = "success";
//     header("location: ../manage-admin.php");

// }

// if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["updateId"])) {

//     $admin_id = $_GET["id"];
//     $fullname = $_POST["full_name"];
//     $username = $_POST["username"];

//     $adminContr->updateAdmin($fullname, $username, $admin_id);

// }

// if(isset($_POST["cancelUpdate"])) {

//     session_start();

//     $_SESSION["add"] = "Update Cancelled";
//     $_SESSION["state"] = "invalid";

//     header("location: ../manage-admin.php");

// }

$adminContr = new AdminContr();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // checks for form submission
    if (isset($_POST["updateAdmin"])) {

        updateAdminFormHandler($adminContr);
    } elseif (isset($_POST["saveAdmin"])) {
    } elseif (isset($_POST["cancelUpdate"])) {
    }
}

if (isset($_GET["removeId"])) {
} elseif (isset($_GET["updateId"])) {
}

function updateAdminFormHandler($adminContr)
{

    $admin_id = $_POST["admin_id"];
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];

    $adminContr->updateAdmin($fullname, $username, $admin_id);

    handleSuccessRedirect("Admin Updated Successfully");
}

function saveAdminHandler($adminContr)
{

    $fullname = filter_input(INPUT_POST, 'admin_fullname', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'admin_username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'admin_password', FILTER_SANITIZE_SPECIAL_CHARS);

    $adminContr->addAdmin($fullname, $username, $password);

    handleSuccessRedirect("Admin Updated Successfully");
}

function cancelUpdateHandler()
{


    handleInvalidRedirect("Admin Update Canceled");
}

function cancelSaveAdminHandler($adminContr)
{


    handleInvalidRedirect("Admin Added Canceled");
}

function handleUpdateAdminPage($adminContr, $admin_id)
{


    handleSuccessRedirect("Admin Updated Successfully");
}

function handleRemoveAdmin($adminContr, $admin_id)
{

    $adminContr->delAdmin($admin_id);
    handleSuccessRedirect("Admin Removed Successfully");
}

function handleSuccessRedirect($message)
{
    session_start();
    $_SESSION["add"] = $message;
    $_SESSION["state"] = "success";
    header("location: ../manage-admin.php");
    exit();
}

// Helper function for redirecting with invalid message
function handleInvalidRedirect($message)
{
    session_start();
    $_SESSION["add"] = $message;
    $_SESSION["state"] = "invalid";
    header("location: ../manage-admin.php");
    exit();
}
