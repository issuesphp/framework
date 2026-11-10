<?php

// session_start();

namespace Issues\Session;

// session_start();


class Session  
{

	public static $userInfo;    

	public function __construct()
	{
		// parent::__construct();    


		self::$userInfo = self::getUserSession();
	}



	public static function setUserSession($params)
	{ 

		// print_r($params);

		
		$_SESSION["id"] = $params['id'];
		$_SESSION["email"] = $params['email'];
		$_SESSION["role_id"] = $params['role_id'];

		// $loginSession = array(
		// 	"id" => $_SESSION["id"], 
		// 	"email" => $_SESSION["email"],
		// 	"role_id" => $_SESSION["role_id"]           
		// );

		// return $loginSession;

		// $userData = self::getUserSession($loginSession);

		// return $userData;   
		

	}

	// public static function getUserSession($params)
	public static function getUserSession()
	{ 

		// print_r($params);

		
		// $_SESSION["id"] = $params['id'];
		// $_SESSION["email"] = $params['email'];
		// $_SESSION["role_id"] = $params['role_id'];

		// $uSession = array(
		// 	"id" => $params['id'],
		// 	"email" => $params['email'],
		// 	"role_id" => $params['role_id']        
		// );

		// return $uSession; 

		$loginSession = array(
			"id" => $_SESSION["id"], 
			"email" => $_SESSION["email"],
			"role_id" => $_SESSION["role_id"]           
		);

		return $loginSession;
		

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
