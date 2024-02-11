<?php
ob_start();
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/header.php";
?>

<div class="header-wrapper">
    <h1>Update Product</h1>
</div>


<?php
$product_id = $_GET["id"];

$sql = "SELECT * FROM products WHERE product_id=$product_id";

$result = mysqli_query($conn, $sql);

if (isset($_SESSION["desc"])) {
    echo nl2br($_SESSION["desc"]);
    unset($_SESSION["desc"]);
}

if ($result) {

    $row = mysqli_fetch_assoc($result);
?>
    <div class="form-wrapper">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="update_form" enctype="multipart/form-data">


            <p>
                <label for="product_name">
                    Product Name: <input type="text" name="product_name" value="<?php echo $row["product_name"]; ?>">
                </label>
            </p>

            <p>
                <label for="product_image">
                    Product Image: <input type="file" name="product_image">
                </label>
            </p>

            <p>
                <label for="product_quantity">
                    Quantity: <input type="number" name="product_quantity" value="<?php echo $row["product_quantity"]; ?>">
                </label>
            </p>

            <p>
                <label for="product_price">
                    Price: <input type="number" name="product_price" value="<?php echo $row["product_price"]; ?>">
                </label>
            </p>

            <p>
                <label for="product_description">
                    Description: <textarea name="product_description" id="product_description" cols="80" rows="10"><?php echo $row["product_description"]; ?></textarea>
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
?>


<?php
if (isset($_POST["save"])) {


    $product_name = $_POST["product_name"];

    $sql = checkQuery();

    $result = mysqli_query($conn, $sql);

    //query succeded
    queryMessage("Update", $result);
} elseif (isset($_POST["cancel"])) {
    $_SESSION["add"] = "Update Cancelled";
    $_SESSION['state'] = "invalid";
    returnHeader();
}

mysqli_close($conn);
?>

<!-- functions -->
<?php
function checkQuery()
{

    $product_id = $_GET["id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_quantity = $_POST["product_quantity"];
    $product_desc = $_POST["product_description"];

    $product_desc = str_replace("'", "\'", $product_desc);

    $sql = "";

    if (isset($_FILES["product_image"]["name"]) && !empty($_FILES["product_image"]["name"])) {

        // get image name
        $image_name = $_FILES["product_image"]["name"];

        // get the extension of the image
        $ext = end(explode('.', $image_name));

        // rename image
        $image_name = "Product_" . rand(0, 9999) . "." . $ext;

        // get path of said image
        $source_path = $_FILES["product_image"]["tmp_name"];

        // declare destination where image will be stored
        $destination_directory = "../images/products/";

        // concat directory and image name
        $destination_path = $destination_directory . $image_name;

        if (file_exists($image_name)) {
            $_SESSION["add"] = "Image Already exists.";
            $_SESSION["state"] = "invalid";
            returnHeader();
        } else {
            // move image to directory
            $upload = move_uploaded_file($source_path, $destination_path);

            // check if upload was successful
            if ($upload == false) {
                $_SESSION["add"] = "Failed to upload image.";
                $_SESSION["state"] = "invalid";
                returnHeader();
            }

            $sql = "UPDATE products SET
                    product_name='{$product_name}', product_image='{$image_name}',
                    product_quantity='{$product_quantity}', product_price='{$product_price}',
                    product_description='{$product_desc}' WHERE product_id={$product_id};";


            $_SESSION["desc"] = $product_desc;
        }
    } else {

        $sql = "UPDATE products SET
            product_name='{$product_name}', product_quantity='{$product_quantity}',
            product_price='{$product_price}', product_description='{$product_desc}'
            WHERE product_id={$product_id};";

    }

    return $sql;
}
?>

<?php

function returnHeader()
{
    header("Location: manage-products.php");
    ob_flush();
}

function queryMessage($state, $result)
{

    if ($result) {
        $_SESSION['add'] = "Product {$state} Successfuly";
        $_SESSION['state'] = "success";
    } else {
        $_SESSION['add'] = "Product {$state} Unsuccessfully";
        $_SESSION['state'] = "invalid";
    }

    returnHeader();
}

?>

<?php
include "partials/footer.php";
?>