<?php
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/header.php";
?>

<div class="header-wrapper">
    <h1>Update Admin</h1>
</div>


<?php
$admin_id = $_GET["id"];

$sql = "SELECT * FROM admin WHERE id=$admin_id";

$result = mysqli_query($conn, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);
?>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="update_form">


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
            <input type="submit" name="cancel" value="Cancel" class="remove">
        </div>
    </form>
<?php
}
?>


<?php
if (isset($_POST["save"])) {


    $fullname = $_POST["full_name"];
    $username = $_POST["username"];

    $sql = "UPDATE admin SET full_name='{$fullname}',username='{$username}'
            WHERE id=$admin_id";

    $result = mysqli_query($conn, $sql);



    //query succeded
    if ($result) {
        $_SESSION['add'] = "Admin '{$username}' updated successfully!";
        $_SESSION['state'] = "success";
        header("location: manage-admin.php");
    } else {
        $_SESSION['add'] = "Admin {$username} was not updated";
        $_SESSION['state'] = "invalid";
        header("location: manage-admin.php");
    }
} elseif (isset($_POST["cancel"])) {
    $_SESSION["add"] = "Update Cancelled";
    $_SESSION['state'] = "invalid";
    header("location: manage-admin.php");
}
?>


<?php
include "partials/footer.php";
?>