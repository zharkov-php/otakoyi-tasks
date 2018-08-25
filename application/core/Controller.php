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




	public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);

	}



}