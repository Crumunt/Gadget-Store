<?php

class AdminContr extends Admin {
    

    public function addAdmin($fullname, $username, $password) {

        // ERROR HANDLERS
        if($this->checkEmptyInputs($fullname, $username, $password)) {
            
            session_start();
            $_SESSION["add"] = "Admin Added Unsucessfully";
            $_SESSION["state"] = "invalid";

            header("location: ../admin/manage-admin.php?error=emptyFields");
            exit();
        }

        $this->createAdmin($fullname, $username, $password);

    }
    
    private function checkEmptyInputs($fullname, $username, $password) {


        if (empty($fullname) || empty($username) || empty($password)) {
        
            return true;
        }

        return false;
    }

    
    public function delAdmin($admin_id) {

        $this->removeAdmin($admin_id);

    }

    public function updateAdmin($fullname,$username,$admin_id) {
        $this->setAdmin($fullname, $username, $admin_id);
    }

}