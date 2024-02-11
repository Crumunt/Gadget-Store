<?php

class Dbh {

    protected function connect() {
        try {
            
            $username = "root";
            $password = "";
            $dbName = "GadgetStore";


            // IMPORTANT NOTE IF YOU WANT TO REFERENCE A VARIABLE USE DOUBLE QOUTES INSTED OF SINGLE QUOTES 
            $dbh = new PDO("mysql:host=localhost;dbname=$dbName", $username, $password);

            return $dbh;

        } catch (PDOException $e) {
            //if does not connect print error and kill connection
            print "Error!: " . $e->getMessage() . "<br>";
            die();
        }
    }
    
}

?>