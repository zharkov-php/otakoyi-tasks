<?php

namespace application\core;

use application\core\View;

abstract class Controller
{

    /**
     * @var
     */
    public $route;


    /**
     * @var \application\core\View
     */
    public $view;


    /**
     * @var
     */
    public $acl;


    /**
     * Controller constructor.
     * @param $route
     */
	public function __construct($route)
    {
        $this->route = $route;
        if (!$this->checkAcl()) {
            View::errorCode(403);
        }
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);

	}


    /**
     * Load models
     * Загрузка моделі
     * @param $name
     * @return mixed
     */
    public function loadModel($name) {
        $path = 'application\models\\'.ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
    }


    /**
     * Function include role and its test
     * Функція підключає ролі та перевіряє
     * @return bool
     */
    public function checkAcl()
    {
        $this->acl = require 'application/acl/'.$this->route['controller'].'.php';
        if ($this->isAcl('all')) {
            return true;
        }
        elseif (isset($_SESSION['authorize']['id']) and $this->isAcl('authorize')) {
            return true;
        }
        elseif (!isset($_SESSION['authorize']['id']) and $this->isAcl('guest')) {
            return true;
        }
        elseif (isset($_SESSION['admin']) and $this->isAcl('admin')) {
            return true;
        }
        return false;
    }


    /**
     * Function  test role
     * Функція  перевіряє ролі
     * @param $key
     * @return bool
     */
    public function isAcl($key)
    {
        return in_array($this->route['action'], $this->acl[$key]);
    }



}