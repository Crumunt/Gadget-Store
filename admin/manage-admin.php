<?php
ob_start();
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
// include "../config/connection.php";
include "partials/session_message.php";
include "partials/header.php";
include "../classes/dbh.class.php";
include "../classes/admin.class.php";
include "../classes/admin-view.class.php";
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
    <form action="../includes/manage-admin.inc.php" method="POST">
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

            $adminView = new AdminView();
            $result = $adminView->fetchAdmins();
            $admin_count = 1;

            foreach ($result as $value) {
            ?>

                <tr>
                    <td>
                        <p>
                            <?php echo $admin_count++; ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $value["full_name"]; ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $value["username"]; ?>
                        </p>
                    </td>
                    <td>
                        <a href="update-admin.php?id=<?php echo $value["id"]; ?>" class="update">Update Admin</a>
                        <a href="../includes/manage-admin.inc.php?id=<?php echo $value["id"]; ?>" class="remove">Delete Admin</a>
                    </td>
                </tr>

            <?php
            }

            ?>
        </tbody>
    </table>

</main>

<?php include "partials/footer.php"; ?>