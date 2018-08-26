<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 25.08.18
 * Time: 12:49
 */

namespace application\core;

class View
{

    /**
     * @var string
     */
    public $path;


    /**
     * @var
     */
    public $route;


    /**
     * @var string
     */
    public $layout = 'default';


    /**
     * View constructor.
     * Конструктор класу
     * @param $route
     */
    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }



    /**
     * Function upload layout and views
     * Функція загрузки шаблону і виду
     * @param $title
     * @param array $vars
     */
    public function render($title, $vars = [])
    {
        extract($vars);
        $path = 'application/views/'.$this->path.'.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
        }
    }



    /**
     * Function redirect user
     * Функція перенапрвлення користувача
     * @param $url
     */
    public function redirect($url)
    {
        header('location: '.$url);
        exit;
    }



    /**
     * Function views error views
     * Функція виводу помилок сторінками
     * @param $code
     */
    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'application/views/errors/'.$code.'.php';
        if (file_exists($path)) {
            require $path;
        }
        exit;
    }


    /**
     * Function views message json
     * @param $status
     * @param $message
     */
    public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }


    /**
     * Function redirect json
     * @param $url
     */
    public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }
}