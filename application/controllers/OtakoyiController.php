<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 25.08.18
 * Time: 12:07
 */

namespace application\controllers;

use application\core\Controller;



class OtakoyiController extends Controller
{

    /**
     * echo view index
     */
    public function indexAction()
    {

        $this->view->render('OTAK ');
    }
}