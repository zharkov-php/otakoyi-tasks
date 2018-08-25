<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{

    /**
     * echo view login
     */
    public function loginAction() {
        $this->view->render('Вхід');
    }


    /**
     * echo view register
     */
    public function registerAction() {
        $this->view->render('Регістрація');
    }

}