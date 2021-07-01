<?php
require_once "../../config.php";
require_once BASE_DIR."/App/Model/User.php";

class LoginController
{
    public $model;

    function auth(){
        if (isset($_POST['login'])) {
            if (empty($_POST['username'])) {
                return "username kosong";
            }
            elseif (empty($_POST['password'])) {
                return "password kosong";
            }

            $username = $_POST['username'];
            $password_input = $_POST['password'];

            $this->model = new User();
            $password_check = $this->model->select_password($username)['password'];

            if (password_verify($password_input, $password_check)) {
                return 'Password is valid!';
            } else {
                return 'Invalid password.';
            }

        }

        else {
            return "";
        }
    }

}