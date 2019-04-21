<?php

namespace system\components;

use Twig_Environment;
use Twig_Loader_Filesystem;

class Debug
{

    public static function error($message)
    {
        $loader = new Twig_Loader_Filesystem(
            App::$current->config['components']['twig']['templates']
        );

        $render = new Twig_Environment($loader);

        try {
            echo $render->render(
                "layouts/error.twig",
                ['error' => $message]
            );

            die();
        } catch (\Exception $e) {
            Debug::trace($e);
        }
    }

    public static function trace(\Exception $error)
    {
        echo $error->getMessage();
        die();
    }

}