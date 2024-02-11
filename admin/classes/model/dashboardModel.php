<?php

class Dashboard extends Dbh {

    protected function getAdminCount() {

        $stmt = $this->connect()->prepare("SELECT * FROM admin;");

        if(!$stmt->execute()) {

            $stmt = null;
            header("location: ../index.php?error=StmtFailed");
            exit();
        }

        return $stmt->rowCount();

    }

    protected function getProductCount() {
        
        $stmt = $this->connect()->prepare("SELECT * FROM products;");

        if(!$stmt->execute()) {

            $stmt = null;
            header("location: ../index.php?error=StmtFailed");
            exit();
        }

        return $stmt->rowCount();

    }

    protected function getOrderCount() {
        
        $stmt = $this->connect()->prepare("SELECT * FROM order;");

        if(!$stmt->execute()) {

            $stmt = null;
            header("location: ../index.php?error=StmtFailed");
            exit();
        }

        return $stmt->rowCount();

    }

}