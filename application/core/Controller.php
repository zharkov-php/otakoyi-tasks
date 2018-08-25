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
     * Controller constructor.
     * @param $route
     */
	public function __construct($route)
    {
        $this->route = $route;
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



}