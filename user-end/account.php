<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store something</title>

    <link rel="stylesheet" href="css/account.css">
    <script src="https://kit.fontawesome.com/986602f906.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php include "user-partials/header.php" ?>

    <main>

        <aside>
            <button class="profile">Profile</button>
            <button class="password">Change Password</button>
            <button class="logout">Log out</button>
        </aside>
        <div class="content-wrapper">
            <div class="profile-wrapper">
                <form action="#" method="POST">
                    <label for="username">
                        Username:
                        <input type="text" name="username" value="Username">
                    </label>
                    <label for="name">
                        Name:
                        <input type="text" name="name" value="" placeholder="Name...">
                    </label>
                    <label for="gender">
                        Gender:
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="other"> Other
                    </label>

                    <label for="save">
                        <input type="submit" name="save" value="Save Changes">
                    </label>

                </form>
            </div>
            <div class="password-wrapper">
                <form action="#" method="POST">
                    <label for="oldPassowrd">
                        Old Password:
                        <input type="password" name="oldPassowrd" placeholder="Old password">
                    </label>

                    <label for="newPassword">
                        <input type="password" name="newPassword" placeholder="New password">
                    </label>

                    <label for="confirmPassword">
                        <input type="password" name="confirmPassword" placeholder="Confirm password">
                    </label>
                </form>
            </div>
        </div>

    </main>



    <?php include "user-partials/footer.php"; ?>

</body>

</html>