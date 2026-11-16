<?php

// session_start();

namespace Issues\Session;

// session_start();


class Session  
{

	public static $userInfo;    

	// public function __construct()
	// {
	// 	// parent::__construct();    


	// 	// self::$userInfo = self::getUserSession();
	// }



	public static function setUserSession($params)
	{ 
		

		
		$_SESSION["id"] = $params['id'];
		$_SESSION["email"] = $params['email'];
		$_SESSION["role_id"] = $params['role_id'];		

	}


	public static function getUserSession()
	{ 

		// if (session_status() === PHP_SESSION_NONE) {
		// 	session_start();
		// }

		// if (!empty($_SESSION["email"])) {
		return [
			"id" => $_SESSION["id"], 
			"email" => $_SESSION["email"],
			"role_id" => $_SESSION["role_id"]           
		];
		// }

		// return null;
		

	}

	public static function init() {
		if (self::status() == PHP_SESSION_NONE) {
			session_start();
		}
	}

	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}

	public static function get($key) {
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		}
		return null;
	}

	public static function delete($key) {
		if (isset($_SESSION[$key])) {
			unset($_SESSION[$key]);
		}
	}

	public static function status() {
		return session_status();
	}

	public static function destroy() {
		session_unset();
		session_destroy();
	}



	public static function accessUsers()
	{

		

		// if ($_SESSION["role_id"] != 1) {
		if (self::$userInfo["role_id"] != 1) {

			$result = shell_exec('php resources/views/errors/error_404'.'.php');

			echo $result;
		} 



		// switch ($userInfo['role_id']) {
		// 	case 1:	

		// 	$result = shell_exec('php resources/views/errors/error_404'.'.php');

		// 	echo $result;

		// 	break;		
		// 	case 2:		

		// 	break;
		// 	default:

		// 	echo "Role not Found";					
		// }


	}



}
