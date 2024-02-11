<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "classes/dbh.class.php";
include "classes/admin.class.php";
include "classes/admin-view.class.php";
include "partials/header.php";
?>

<div class="header-wrapper">
    <h1>Update Admin</h1>
</div>


<?php
$admin_id = $_GET["updateId"];

$adminView = new AdminView();

$result = $adminView->fetchAdmin($admin_id);


if ($result) {

?>
    <form action="includes/manage-admin.inc.php" method="POST" class="update_form">


        <p>
            <label for="id">
                Admin ID: <input type="text" name="id" disabled value="<?php echo $admin_id?>">
            </label>
        </p>

        <p>
            <label for="full_name">
                Full Name: <input type="text" name="full_name" value="<?php echo $result[0]["full_name"] ?>">
            </label>
        </p>

        <p>
            <label for="username">
                Username: <input type="text" name="username" value="<?php echo $result[0]["username"] ?>">
            </label>
        </p>

        <div class="button-wrapper">
            <input type="submit" name="updateAdmin" value="Save Changes" class="update">
            <input type="submit" name="cancelUpdate" value="Cancel" class="remove">
        </div>
    </form>
<?php
}
?>

<?php
include "partials/footer.php";
?>