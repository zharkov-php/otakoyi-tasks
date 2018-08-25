<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 25.08.18
 * Time: 11:41
 */



namespace application\core;


class Router
{

    /**
     * @var array
     */
    protected $routes = [];


    /**
     * @var array
     */
    protected $params = [];


    /**
     * Router constructor.
     * Конструктор
     */
    public function  __construct()
    {
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
        //myDebug($arr);
    }


    /**
     * Function add routs
     * Фунція добавлення маршрутів
     * @param $route
     * @param $params
     */
    public function add($route, $params)
    {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }



    /**
     * Test for route availability
     * Перевірка на наявність маршруту
     * @return bool
     */
    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    /**
     * Start Router
     * Запуск Router
     */

    public function run()
    {
        if ($this->match()) {
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    echo 'Не знайдений екшн ' . $action;
                }
            } else {
                echo 'Не знайдений контроллер '  . $path;
            }
        } else {
            echo 'Маршрут не знайдений ';
        }
    }

}
