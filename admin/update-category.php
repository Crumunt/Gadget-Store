<?php
ob_start();
session_start();
include "../config/connection.php";
include "partials/header.php";
?>

<div class="header-wrapper">
    <h1>Update Category</h1>
</div>


<?php

$category_id = $_GET["id"];

$sql = "SELECT * FROM category WHERE category_id=$category_id";

$result = mysqli_query($conn, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);
?>
    <div class="form-wrapper">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="update_form" id="category">


            <p>
                <label for="category_name">
                    Category Name: <input type="text" name="category_name" value="<?php echo $row["category_name"]; ?>">
                </label>
            </p>

            <p>
                <label for="isActive">
                    Active: <input type="radio" name="isActive" <?php echo ($row["active"] == 0) ? "checked" : ""; ?> value="0">Yes
                    <input type="radio" name="isActive" <?php echo ($row["active"] == 1) ? "checked" : ""; ?> value="1">No
                </label>
            </p>

            <div class="button-wrapper">
                <input type="submit" name="save" value="Save Changes" class="update">
                <input type="submit" name="cancel" value="Cancel" class="remove">
            </div>
        </form>
    </div>
<?php
}

mysqli_free_result($result);
?>

<?php
function returnHeader()
{
    header("Location: manage-categories.php");
    ob_flush();
}

function queryMessage($state, $result)
{

    if ($result) {
        $_SESSION['add'] = "Category {$state} Successfuly";
        $_SESSION['state'] = "success";
    } else {
        $_SESSION['add'] = "Category {$state} Unsuccessfully";
        $_SESSION['state'] = "invalid";
    }

    returnHeader();
}
?>

<?php

if (isset($_POST["save"])) {

    $category_name = $_POST["category_name"];
    $active = $_POST["isActive"];

    $sql = "UPDATE category SET category_name='{$category_name}', active='{$active}' WHERE category_id={$category_id}";

    $result = mysqli_query($conn, $sql);

    queryMessage("Update", $result);


} elseif (isset($_POST["cancel"])) {
    returnHeader();
}

mysqli_close($conn);

?>