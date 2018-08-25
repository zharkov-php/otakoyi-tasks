<?php

namespace application\controllers;

use application\core\Controller;



class MainController extends Controller
{

    /**
     * echo view index
     * $title
     *
     */
	public function indexAction()
    {
        $this->view->render('Головна сторінка через контроллер через змінну $title');
	}

}