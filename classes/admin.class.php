<?php

class Admin extends Dbh
{

    // returns all admins stored in the database
    protected function getAdmins()
    {

        $stmt = $this->connect()->prepare('SELECT * FROM admin');


        if (!$stmt->execute()) {
            $stmt = null;
            header("location: manage-admin.php?error=stmtFailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: manage-admin.php?error=noDataFound");
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    // get a single admin
    protected function getAdmin($admin_id)
    {

        $stmt = $this->connect()->prepare('SELECT * FROM admin WHERE id=?');

        if (!$stmt->execute(array($admin_id))) {
            $stmt = null;
            header("location: manage-admin.php?error=stmtError");
            exit();
        }

        if (!$stmt->rowCount() == 0) {
            $stmt = null;
            header("location: manage-admin.php?error=adminNotFound");
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    // create new admin
    protected function createAdmin($full_name, $username, $password)
    {
        $stmt = $this->connect()->prepare('INSERT INTO admin(full_name,username,password) VALUES (?, ?, ?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($full_name, $username, $hashedPassword))) {
            $stmt = null;
            header("location: ./admin/manage-admin.php?error=addAdminFailed");
            exit();
        }

        $stmt = null;
    }


    protected function setAdmin($full_name, $username, $admin_id)
    {

        $stmt = $this->connect()->prepare('UPDATE admin SET $full_name=?, $username=? WHERE id=?;');

        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($full_name, $username, $admin_id))) {
            $stmt = null;
            header("location: manage-admin.php?error=updateFailed");
            return "invalid";
            exit();
        }
        

        $stmt = null;

        return "success";
    }

    
    protected function removeAdmin($admin_id) {

        $stmt = $this->connect()->prepare('DELETE FROM admin WHERE id=?');

        if(!$stmt->execute(array($admin_id))) {
            $stmt = null;

            session_start();
            $_SESSION["add"] = "Admin Removed Unsucessfully";
            $_SESSION["state"] = "invalid";

            header("location: ../manage-admin.php");
            exit();
        }

        $stmt = null;

    }
}
