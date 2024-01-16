<?php

define("SITEURL", "localhost/Gadget%20Store/");

//name of database server, default is localhost
$db_server = "localhost";
//name of database user, default is root
$db_user = "root";
//password of database, default is set to blank
$db_password = "";
//name of database
$db_name = "GadgetStore";
//connection type(?) to database
try {
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception) {
    echo "Could not connect to server";
}


?>

<?php

$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);

if ($result) {

    $imageInUse = array();

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            // $imageInUse = array_push($row["product_image"]);
            $image = $row["product_image"];

            array_push($imageInUse, $image);
        }
    }

    $files = glob("../images/products/*");

    foreach ($files as $file) {
        $file_name = end(explode("/", $file));

        if (!in_array($file_name, $imageInUse)) {
            unlink($file);
        }
    }
}

?>