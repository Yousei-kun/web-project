<?php
require_once "BaseModel.php";

class User extends BaseModel
{
    public function select_password($username){
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT password FROM users WHERE username= :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $password_check = $stmt->fetch();
        return $password_check;
    }

    public function create_user($username, $password){
        $conn = $this->connect();
        $stmt = $conn->prepare("INSERT INTO users (id, username, password) VALUES ('', :username, :password)");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $res = $stmt->execute();

        if ($res) {
            return "User created successfully!";
        }
        else {
            return "Error when creating user";
        }

    }
}