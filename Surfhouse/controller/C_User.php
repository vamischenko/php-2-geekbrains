<?php
//
// Контроллер страницы пользователя.
//
include_once('model/User.class.php');

class C_User extends C_Base
{
		
    public function action_info() {
        $get_user = new User();
        $user_info = $get_user->getUser($_SESSION['user_id']);
        $this->title .= ' | '.$user_info['name'];
        $this->content = $this->Template('view/v_userinfo.php', array('username' => $user_info['name']));
    }
    
    public function action_register() {
        $this->title .= ' | Register';
        $this->content = $this->Template('view/v_register.php', array());

        if ($this->isPost()) {
            $new_user = new User();
            $result = $new_user->newUser($_POST['name'], $_POST['login'], $_POST['password']);
            $this->content = $this->Template('view/v_register.php', array('text' => $result));
        }
    }

    public function action_login() {
        $this->title .= ' | Enter';
        $this->content = $this->Template('view/v_login.php', array());

        if ($this->isPost()) {
            $login = new User();
            $result = $login->login($_POST['login'], $_POST['password']);
            $this->content = $this->Template('view/v_login.php', array('text' => $result));
        }
    }

    public function action_logout() {
        $logout = new User();
        $result = $logout->logout();
    }
}
