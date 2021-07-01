<?php
require_once "../../config.php";
require_once BASE_DIR."/App/Model/User.php";

class RegisterController
{
    public $model;

    function register(){
        if (isset($_POST['register'])) {
            if ((empty($_POST['username'])) || (strlen($_POST['username']) < 8)) {
                return "Username must be more than 8 characters!";
            }
            elseif ((empty($_POST['password'])) || (strlen($_POST['password']) < 8)) {
                return "Password must be more than 8 characters!";
            }

            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $this->model = new User();
            $msg = $this->model->create_user($username, $password);
            return $msg;
        }

        else {
            return "";
        }
    }

}