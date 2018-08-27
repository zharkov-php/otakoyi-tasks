<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Admin;
use application\models\Main;


class AdminController extends Controller
{


    /**
     * AdminController constructor.
     * @param $route
     */
	public function __construct($route)
    {
		parent::__construct($route);
		$this->view->layout = 'admin';
	}




    /**
     *admin/tasks (controller/view)
     */
    public function tasksAction()
    {

	    $mainModel = new Main();
        $result = $mainModel->getTasks();

        $vars = [
            'news' => $result,
        ];

        $this->view->render('Головна сторінка АДМіНКИ через контроллер через змінну ', $vars);
    }


    /**
     * admin/login (controller/view)
     */
    public function loginAction()
    {

        if (isset($_SESSION['admin'])) {
            $this->view->redirect('/admin/tasks');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->redirect('/admin/tasks');
        }
        $this->view->render('Вход');
    }


    /**
     * admin/add (controller/action)
     */
	public function addAction()
    {

        if (!empty($_POST)) {


            if ( !$_POST['g-recaptcha-response'] )
                exit('Заполните капчу');

            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $key = '6LcegmwUAAAAAH_-g4cYPNa9cL7mX1Lc6atQ1CFu';
            $query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];

            $data = json_decode(file_get_contents($query));

            if ( $data->success == false)
                exit('Капча введена неверно');





            $this->model->postAdd($_POST);
        }
        $this->view->redirect('/');
	}


    /**
     * admin/edit (controller/action)
     */
	public function editAction()
    {

		$this->view->render('Редактировать пост');
	}


    /**
     * admin/delete (controller/action)
     */
	public function deleteAction()
    {

        //myDebug($this->route);
        $admin = new Admin();
        if (!$admin->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $admin->postDelete($this->route['id']);

        $this->view->redirect('/admin/tasks');
	}


    /**
     * admin/logout (controller/action)
     */
	public function logoutAction()
    {

        unset($_SESSION['admin']);
        $this->view->redirect('/');
	}


}