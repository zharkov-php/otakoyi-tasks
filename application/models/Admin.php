<?php

namespace application\models;

use application\core\Model;


class Admin extends Model
{

    /**
     * @var
     */
	public $error;




    /**
     * Validate admin login
     * @param $post
     * @return bool
     */
	public function loginValidate($post)
    {
		$config = require 'application/config/admin.php';
		if ($config['email'] != $post['email'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}





}