<?php

namespace system\components;

/**
 * Class App
 * @package system\components
 *
 * @var $config array
 * @var $request Request
 * @var $connection \PDO
 * @var $controller Controller
 * @var $action string
 */
class App extends BaseObject
{

    use Singleton; // singleton trait

    /**
     * @var App
     */
    public static $current; // app global configuration
/**
     * @var array
     */
    public $config; // GET & POST handler
/**
     * @var Request
     */
    public $request; // database PDO object
/**
     * @var \PDO
     */
    public $connection; // singleton instance

    /**
     * App constructor (singleton)
     * @param array $config
     */
    public function __construct(array $config)
    {
        if (empty(static::$current)) {
            $this->config = $config;
            static::$current = $this;
        } else {
            return static::$current;
        }
    }

    /**
     * Start main loop
     */
    public function start()
    {
        $this->connection = $this->setConnection();
        $this->request = new Request();

        $router = new Router($this->request->route);
        $router->route();

    }

    /**
     * Creates DB connection with PDO
     */
    private function setConnection()
    {
        $settings = $this->config['db'];

        $host = $settings['host'];
        $user = $settings['user'];
        $password = $settings['password'];
        $database = $settings['database'];

        try {
            $dbh = new \PDO("mysql:host={$host};dbname={$database}", $user, $password);
            return $dbh;
        } catch (\PDOException $error) {
            echo $error->getMessage();
            die();
        }
    }

}
