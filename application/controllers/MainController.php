<?php

namespace application\controllers;

use application\core\Controller;



class MainController extends Controller
{

    /**
     * echo view index
     * $title
     *include model Main(getNews())
     */
	public function indexAction()
    {

       $result = $this->model->getTasks();
        $vars = [
            'news' => $result,
        ];

        $this->view->render('Головна сторінка через контроллер через змінну ', $vars);
	}

}