<?php
//
// Базовый класс контроллера.
//
abstract class C_Controller
{
    // Генерация внешнего шаблона
    public function Request($action, $id = false)
    {
        $this->before();
        $this->$action($id);
        $this->render($action);
    }

    // Функция отрабатывающая до основного метода

    protected abstract function before();

    protected abstract function render();

    //
    // Запрос произведен методом GET?
    //

    public function __call($name, $params)
    {
        die('404 - страница не найдена');
    }

    //
    // Запрос произведен методом POST?
    //

    protected function IsGet()
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    //
    // Генерация HTML шаблона в строку.
    //

    protected function IsPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    // Если вызвали метод, которого нет - завершаем работу

    protected function Template($fileName, $vars = array())
    {
        // Установка переменных для шаблона.
        foreach ($vars as $k => $v) {
            $$k = $v;
        }

        // Генерация HTML в строку.
        ob_start();
        include "$fileName";
        return ob_get_clean();
    }
}
