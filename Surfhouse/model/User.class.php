<?php
include_once "SQL.class.php";

Class User extends SQL
{
    public $user_id, $user_login, $user_name, $user_password;

    public function getUser($id)
    {
        return parent::Select("SELECT * FROM `users` WHERE id='$id'");
    }

    public function newUser($name, $login, $password)
    {
        $object = [
            'name' => strip_tags($name),
            'login' => strip_tags($login),
            'password' => parent::Password(strip_tags($name), strip_tags($password))
        ];
        $user = parent::Select('users', 'login', strip_tags($login));

        if (!$user) {
            parent::Insert('users', $object);
            return 'You have successfully registered!';
        } else {
            return 'A user with this login is already registered!';
        }
    }

    public function login($login, $password)
    {
        $login = strip_tags($login);
        $password = strip_tags($password);
        $user = parent::Select("SELECT * FROM `users` WHERE user_login='$login'");

        if ($user) {
            if ($user[0]['password'] == parent::Select("SELECT * FROM `users` WHERE user_password=md5('$password')")) {
                $_SESSION['user_id'] = $user[0]['id'];
                return 'Welcome, ' . $user[0]['user_name'] . '!';
            } else {
                return 'Wrong password!';
            }
        } else {
            return 'User with this login is not registered!';
        }
    }

    public function logout()
    {
        if (isset($_SESSION["user_id"])) {
            unset($_SESSION["user_id"]);
            session_destroy();
            return true;
        } else {
            return false;
        }
    }
}
