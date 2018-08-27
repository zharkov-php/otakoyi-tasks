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


    /**
     * Validate POST form
     * @param $post
     * @param $type
     * @return bool
     */
    public function postValidate($post, $type)
    {
        $name= iconv_strlen($post['name']);
        $email = iconv_strlen($post['email']);
        $site = iconv_strlen($post['site']);
        $task = iconv_strlen($post['task']);


        if ($name< 1 or $name > 50) {
            $this->error = 'Название должно содержать от 3 до 100 символов';
            return false;
        } elseif ($email < 1 or $email > 50) {
            $this->error = 'Описание должно содержать от 3 до 100 символов';
            return false;
        }elseif ($site < 1 or $site > 30) {
            $this->error = 'Описание должно содержать от 3 до 100 символов';
            return false;
        } elseif ($task < 1 or $task > 500) {
            $this->error = 'Текст должнен содержать от 10 до 500 символов';
            return false;
        }

        return true;
    }


    /**
     * Create task
     * @param $post
     * @return string
     */
    public function postAdd($post)
    {

        date_default_timezone_set('Europe/Kiev');

        $params = [
            'id'      => '',
            'name'    => $post['name'],
            'email'   => $post['email'],
            'site'    => $post['site'],
            'task'    => $post['task'],
            'date'    => date("Y-m-d H:i:s"),
            'ip'    => $this->userIP(),

        ];
        $this->db->query('INSERT INTO tasks VALUES (:id, :name, :email, :site, :task, :date, :ip)', $params);
        return $this->db->lastInsertId();
    }


    function userIP(){
        $ip = $_SERVER['REMOTE_ADDR'];

        return $ip;
    }



    public function isPostExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM tasks WHERE id = :id', $params);
    }



    public function postDelete($id)
    {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE  FROM tasks WHERE id=:id', $params);
        //unlink('public/materials/'.$id.'.jpg');
    }





}