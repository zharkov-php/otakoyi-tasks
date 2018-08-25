<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{

    /**
     * function get All tasks
     * Функція отримання Всіх задач
     * @return array
     */
	public function getTasks()
    {
		$result = $this->db->row('SELECT * FROM tasks ');
		return $result;
	}



}