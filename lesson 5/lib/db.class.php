<?php

class db
{
    private static $_instance = null;

    private $db; // Ресурс работы с БД

    /*
     * Получаем объект для работы с БД
     */

    private function __construct()
    {
    }

    /*
     * Запрещаем копировать объект
     */

    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new db();
        }
        return self::$_instance;
    }

    public function Connect($user, $password, $base, $host = 'localhost', $port = 3306)
    {
        // Формируем строку соединения с сервером
        $connectString = 'mysql:host=' . $host . ';port= ' . $port . ';dbname=' . $base . ';charset=UTF8;';
        $this->db = new PDO($connectString, $user, $password,
            array(
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // возвращать ассоциативные массивы
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // возвращать Exception в случае ошибки
            )
        );
    }

    public function Select($query, $params = array())
    {
        $result = $this->Query($query, $params);
        if ($result) {
            return $result->fetchAll();
        }
    }

    public function Query($query, $params = array())
    {
        $res = $this->db->prepare($query);
        $res->execute($params);
        return $res;
    }

    /*
     * Выполняем соединение с базой данных
     */

    private function __sleep()
    {
    }

    /*
     * Выполнить запрос к БД
     */

    private function __wakeup()
    {
    }

    /*
     * Выполнить запрос с выборкой данных
     */

    private function __clone()
    {
    }
}

?>
