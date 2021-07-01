<?php


class BaseModel
{
    public function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "web_native";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }

    }
}