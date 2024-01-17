<?php
ob_start(); //fix header problem (cannot modify header)
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/header.php";
?>

<div class="header-wrapper">
    <h1>Category</h1>
    <button class="add-button">Add Category</button>

    <?php
    if (isset($_SESSION['add'])) {
        echo "<p class='session' id='{$_SESSION['state']}'>{$_SESSION['add']}</p>";
        unset($_SESSION['add']);
    }
    ?>
</div>

<dialog class="modal" id="modal">
    <h2>Add Category</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="category_name">
            Category Name: <input type="text" name="category_name">
        </label>

        <label for="isActive" style="width: 100%;">
            Active: 
            <input type="radio" name="isActive" value="0" style="width: auto; margin-left: 5rem;"> Yes
            <input type="radio" name="isActive" value="1" style="width: auto;"> No
        </label>


        <input type="submit" name="save_category" value="Save Changes">
        <input type="button" class="close-modal" value="Close">
    </form>

</dialog>

<main class="manage-admin">
    <table class="manage-admin-table">
        <thead class="admin">
            <th>ID</th>
            <th>Category Name</th>
            <th>Active</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM category";
            $result = mysqli_query($conn, $sql);


            if ($result == true) {

                $count = mysqli_num_rows($result);

                //We have data stored in database
                if ($count > 0) {

                    $category_count = 1;

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row["category_id"];
                        $category_name = $row["category_name"];
                        $active = $row["active"];

            ?>
                        <tr>
                            <td><?php echo $category_count++; ?></td>
                            <td><?php echo $category_name; ?></td>
                            <td><?php echo ($active == 0) ? "Active" : "Not Active"; ?></td>
                            <td>
                                <a href="update-category.php?id=<?php echo $id; ?>" class="update">Update Category</a>
                                <a href="manage-categories.php?id=<?php echo $id; ?>" class="remove">Delete Category</a>
                            </td>
                        </tr>
            <?php

                    }
                } else { //we don't have data in database

                }
            }
            ?>
        </tbody>
    </table>

</main>

<?php
function returnHeader()
{
    header("Location: {$_SERVER['PHP_SELF']}");
    ob_flush();
}

function queryMessage($state, $result) {

    if($result) {
        $_SESSION['add'] = "Category {$state} Successfuly";
        $_SESSION['state'] = "success";
    }else {
        $_SESSION['add'] = "Category {$state} Unsuccessfully";
        $_SESSION['state'] = "invalid";
    }

    returnHeader();

}
?>

<?php

    if(isset($_POST["save_category"])) {

        
        $category_name = $_POST["category_name"];
        $isActive = $_POST["isActive"];

        $sql = "INSERT INTO category (category_name, active)
                VALUES ('$category_name', '$isActive')";
    
        $result = mysqli_query($conn, $sql);

        queryMessage("Added", $result);

    }

    if(isset($_GET["id"])) {

        $category_id = $_GET["id"];

        $sql = "DELETE FROM category WHERE category_id={$category_id}";

        $result = mysqli_query($conn, $sql);

        queryMessage("Delete", $result);
    }


    mysqli_close($conn);
?>

<?php include "partials/footer.php"; ?>