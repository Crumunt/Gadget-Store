<?php
ob_start();
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/header.php";
?>

<div class="header-wrapper">
  <h1>Products</h1>
  <button class="add-button">Add Product</button>

  <?php

  if (isset($_SESSION['add'])) {
    echo "<p class='session' id='{$_SESSION['state']}'>{$_SESSION['add']}</p>";
    unset($_SESSION['add']);
  }
  
  ?>
</div>

<dialog class="modal" id="modal">
  <h2>Add Product</h2>
  <form class="product_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <label for="product_name">
      Product Name: <input type="text" name="product_name">
    </label>

    <label for="product_image">
      Product Image: <input type="file" name="product_image" id="product_image">
    </label>

    <label for="product_quantity">
      Quantity: <input type="number" name="product_quantity">
    </label>

    <label for="product_price">
      Price: <input type="number" name="product_price">
    </label>

    <label for="category">
      Category: <select name="category" id="category">
        <option value="1">Mobile</option>
        <option value="2">Laptop</option>
        <option value="3">Tablet</option>
        <option value="4">PC</option>
        <option value="5">Accessory</option>
      </select>
    </label>

    <label for="product_desc">
      Description: <textarea name="product_desc" id="product_desc" cols="80" rows="10"></textarea>
    </label>

    <input type="submit" name="add_product" value="Add Product">
    <input type="button" class="close-modal" value="Close">
  </form>

</dialog>


<main class="manage-products">
  <table class="manage-products-table">
    <thead>
      <th>ID</th>
      <th>Product Name</th>
      <th>Product Image</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Action</th>
    </thead>

    <tbody>
      <?php
      $sql = "SELECT * FROM products";
      $result = mysqli_query($conn, $sql);

      if ($result == true) {

        $count = mysqli_num_rows($result);

        //We have data stored in database
        if ($count > 0) {

          $product_count = 1;

          while ($row = mysqli_fetch_assoc($result)) {

            $id = $row["product_id"];
            $product_name = $row["product_name"];
            $product_image = $row["product_image"];
            $product_quantity = $row["product_quantity"];
            $product_price = $row["product_price"];

      ?>
            <tr>
              <td><?php echo $product_count++; ?></td>
              <td><?php echo $product_name; ?></td>
              <td><img src="../images/products/<?php echo $product_image ?>" alt="<?php $product_image ?>"></td>
              <td><?php echo $product_quantity; ?></td>
              <td><?php echo $product_price; ?></td>
              <td>
                <a href="update-product.php?id=<?php echo $id; ?>" class="update">Update Product</a>
                <a href="manage-products.php?id=<?php echo $id; ?>" class="remove">Delete Product</a>
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

if (isset($_POST["add_product"])) {

  $product_name = $_POST["product_name"];
  $product_quantity = $_POST["product_quantity"];
  $product_category = $_POST["category"];
  $product_price = $_POST["product_price"];
  $product_desc = $_POST["product_desc"];

  if (isset($_FILES["product_image"]["name"])) {

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

    // move image to directory
    $upload = move_uploaded_file($source_path, $destination_path);

    // check if upload was successful
    if ($upload == false) {
      $_SESSION["add"] = "Failed to upload image.";
      $_SESSION["state"] = "invalid";
      header("location: manage-products.php");
    }
  } else {
    $image_name = "";
  }

  $sql = "INSERT INTO products (product_name, product_image, product_quantity, category_id, product_price, product_description)
          VALUES ('$product_name', '$image_name','$product_quantity','$product_category' ,'$product_price','$product_desc')";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    $_SESSION['add'] = "Product Added Successfully";
    $_SESSION['state'] = "success";
    header('Location: manage-products.php');
  } else {
    $_SESSION['add'] = "Product Added Unsuccessfully";
    $_SESSION['state'] = "invalid";
    header('Location: manage-products.php');
  }
}

if (isset($_GET["id"])) {

  $page = $_SERVER["PHP_SELF"];
  $sec = "0";

  $product_id = $_GET["id"];

  $getProductImageNameQuery = "SELECT product_image FROM products WHERE product_id=$product_id";

  $result = mysqli_query($conn, $getProductImageNameQuery);

  if ($result) {

    $row = mysqli_fetch_assoc($result);

    $productImageName = $row["product_image"];
  }

  mysqli_free_result($result);

  $sql = "DELETE FROM products WHERE product_id=$product_id";

  $result = mysqli_query($conn, $sql);

  if ($result) {

    $_SESSION['add'] = "Product Removed Successfully";
    $_SESSION['state'] = "success";
    header("Refresh: $sec; url=$page");
    ob_end_flush();
  } else {
    $_SESSION['add'] = "Product Removed Unsuccessfully";
    $_SESSION['state'] = "invalid";
    header("Refresh: $sec; url=$page");
    ob_end_flush();
  }
}

mysqli_close($conn);
?>

<?php include "partials/footer.php"; ?>