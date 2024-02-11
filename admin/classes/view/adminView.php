<?php

// include "dbh.class.php";
// include "admin.class.php";

// $view = new Admin();
// $result = $view->getAdmins();

// foreach($view->getAdmins() as $k=>$v) {
//     echo $v["username"]."<br>";
//     echo $v["full_name"]."<br><br>";
// }


class AdminView extends Admin {

    public function fetchAdmins() {
        $admins = $this->getAdmins();

        return $admins;
    }

    public function fetchAdmin($admin_id) {
        $admin = $this->getAdmin($admin_id);

        return $admin;
    }

}