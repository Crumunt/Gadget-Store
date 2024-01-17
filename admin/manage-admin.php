<?php
ob_start();
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/session_message.php";
include "partials/header.php";
?>

<div class="header-wrapper">
    <h1>Admin</h1>
    <button class="add-button">Add Admin</button>

    <?php
    if (isset($_SESSION['add'])) {
        echo "<p class='session' id='{$_SESSION['state']}'>{$_SESSION['add']}</p>";
        unset($_SESSION['add']);
    }
    ?>
</div>

<dialog class="modal" id="modal">
    <h2>Add Admin</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="fullname">
            Full Name: <input type="text" name="admin_fullname">
        </label>

        <label for="username">
            Username: <input type="text" name="admin_username">
        </label>

        <label for="fullname">
            Password: <input type="password" name="admin_password">
        </label>

        <input type="submit" name="save_admin" value="Save Changes">
        <input type="button" class="close-modal" value="Close">
    </form>

</dialog>


<main class="manage-admin">
    <table class="manage-admin-table">
        <thead class="admin">
            <th>ID</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM admin";
            $result = mysqli_query($conn, $sql);

            if ($result == true) {

                $count = mysqli_num_rows($result);

                //We have data stored in database
                if ($count > 0) {

                    $admin_count = 1;

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row["id"];
                        $fullname = $row["full_name"];
                        $username = $row["username"];

            ?>
                        <tr>
                            <td><?php echo $admin_count++; ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
                                <a href="update-admin.php?id=<?php echo $id; ?>" class="update">Update Admin</a>
                                <a href="manage-admin.php?id=<?php echo $id; ?>" class="remove">Delete Admin</a>
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

<!-- STORE DATA TO DATABASE -->
<?php
if (isset($_POST["save_admin"])) {
    $fullname = filter_input(INPUT_POST, 'admin_fullname', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'admin_username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'admin_password', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($fullname)) {
        $_SESSION['add'] = "Please provide name";
        $_SESSION['state'] = "invalid";
        returnHeader();
    } elseif (empty($username)) {
        $_SESSION['add'] = "Please provide username";
        $_SESSION['state'] = "invalid";
        returnHeader();
    } elseif (empty($password)) {
        $_SESSION['add'] = "Please provide password";
        $_SESSION['state'] = "invalid";
        returnHeader();
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admin (full_name, username, password)
                    VALUES('$fullname', '$username', '$hashedPassword')";

        $result = mysqli_query($conn, $sql);

        queryMessage("Added", $result);

        // returnHeader();
    }

    // echo $_POST["save_admin"];
}

if (isset($_GET["id"])) {

    $admin_id = $_GET["id"];
    $sql = "DELETE FROM admin WHERE id=$admin_id";
    $result = mysqli_query($conn, $sql);

    queryMessage("Remove", $result);
}

mysqli_close($conn);
?>

<?php

function returnHeader()
{
    header("Location: {$_SERVER['PHP_SELF']}");
    ob_flush();
}

function queryMessage($state, $result) {

    if($result) {
        $_SESSION['add'] = "Admin {$state} Successfuly";
        $_SESSION['state'] = "success";
    }else {
        $_SESSION['add'] = "Admin {$state} Unsuccessfully";
        $_SESSION['state'] = "invalid";
    }

    returnHeader();

}

?>

<?php include "partials/footer.php"; ?>