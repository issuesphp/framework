<?php


namespace Issues\Request;

use App\Config\AppBase;



class Request  
{

	public static function getPost($key = null) {

		if (!empty($_POST[$key])) {

			$val = htmlspecialchars($_POST[$key]);
			
			return $val; 
		}


		// if (isset($_SESSION[$key])) {
		// 	return $_SESSION[$key];
		// }


		return null;
	}



}
