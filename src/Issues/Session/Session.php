<?php

namespace Issues\Session;


class Session  
{



	public static function setUserSession($params)
	{ 

		// print_r($params);

		
		$_SESSION["id"] = $params['id'];
		$_SESSION["email"] = $params['email'];
		$_SESSION["role_id"] = $params['role_id'];

		$loginSession = array(
			"id" => $_SESSION["id"], 
			"email" => $_SESSION["email"],
			"role_id" => $_SESSION["role_id"]           
		);

		return $loginSession;

		// $userData = self::getUserSession($loginSession);

		// return $userData;   
		

	}

	public static function getUserSession($params)
	{ 

		// print_r($params);

		
		// $_SESSION["id"] = $params['id'];
		// $_SESSION["email"] = $params['email'];
		// $_SESSION["role_id"] = $params['role_id'];

		$uSession = array(
			"id" => $params['id'],
			"email" => $params['email'],
			"role_id" => $params['role_id']        
		);

		return $uSession; 
		

	}		


}
