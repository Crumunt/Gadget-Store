<?php
ob_start();
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/header.php";
?>

<div class="header-wrapper">
    <h1>Update Admin</h1>
</div>


<?php
$admin_id = $_GET["updateId"];

$sql = "SELECT * FROM admin WHERE id=$admin_id";

$result = mysqli_query($conn, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);
?>
    <form action="../includes/manage-admin.inc.php" method="POST" class="update_form">


        <p>
            <label for="full_name">
                Full Name: <input type="text" name="full_name" value="<?php echo $row["full_name"] ?>">
            </label>
        </p>

        <p>
            <label for="username">
                Username: <input type="text" name="username" value="<?php echo $row["username"] ?>">
            </label>
        </p>

        <div class="button-wrapper">
            <input type="submit" name="save" value="Save Changes" class="update">
            <input type="submit" name="cancelUpdate" value="Cancel" class="remove">
        </div>
    </form>
<?php
}
?>


<?php
// if (isset($_POST["save"])) {


//     $fullname = $_POST["full_name"];
//     $username = $_POST["username"];

//     $sql = "UPDATE admin SET full_name='{$fullname}',username='{$username}'
//             WHERE id=$admin_id";

//     $result = mysqli_query($conn, $sql);

//     //query succeded
//     queryMessage("Update", $result);

// } elseif (isset($_POST["cancel"])) {
//     $_SESSION["add"] = "Update Cancelled";
//     $_SESSION['state'] = "invalid";
//     returnHeader();
// }

// mysqli_close($conn);
?>


<?php

// function returnHeader()
// {
//     header("Location: manage-admin.php");
//     ob_flush();
// }

// function queryMessage($state, $result) {

//     if($result) {
//         $_SESSION['add'] = "Admin {$state} Successfuly";
//         $_SESSION['state'] = "success";
//     }else {
//         $_SESSION['add'] = "Admin {$state} Unsuccessfully";
//         $_SESSION['state'] = "invalid";
//     }

//     returnHeader();

// }

?>

<?php
include "partials/footer.php";
?>