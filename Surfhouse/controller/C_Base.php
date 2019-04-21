<?php
//
// Базовый контроллер сайта.
//
include_once('model/User.class.php');

abstract class C_Base extends C_Controller
{
    protected $action;
    protected $title;        // заголовок страницы
    protected $content;        // содержание страницы

    //
    // Конструктор.
    //
    function __construct()
    {
    }

    public function render()
    {
        $get_user = new User();
        if (isset($_SESSION['user_id'])) {
            $user_info = $get_user->getUser($_SESSION['user_id']);
        } else {
            $user_info['name'] = false;
        }
        $vars = array('title' => $this->title, 'content' => $this->content);
        $page = $this->Template('view/v_main.php', $vars);
        echo $page;
    }

    //
    // Генерация базового шаблона
    //	

    protected function before()
    {
        $this->title = 'Surfhouse';
        $this->content = '';
    }
}
