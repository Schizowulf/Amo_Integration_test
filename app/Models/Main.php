<?php

namespace App\Model;

use App\Core\Model;

class Main extends Model {

	public function getNews() 
	{
		$result = $this->db->row('SELECT title, description FROM news');
		return $result;
	}
}