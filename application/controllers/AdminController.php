<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Main;


class AdminController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'admin';
	}


    public function tasksAction() {

	    $mainModel = new Main();
        $result = $mainModel->getTasks();

        $vars = [
            'news' => $result,
        ];




        $this->view->render('Головна сторінка через контроллер через змінну ', $vars);
    }

	public function loginAction()
    {

		$this->view->render('Вход');
	}

	public function addAction()
    {

        $mainModel = new Main();


		$this->view->render('Добавить пост');
	}

	public function editAction() {

		$this->view->render('Редактировать пост');
	}

	public function deleteAction() {

		$this->view->redirect('admin/posts');
	}

	public function logoutAction() {

		$this->view->redirect('admin/login');
	}


}