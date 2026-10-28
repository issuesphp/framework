<?php

namespace Issues\Helper;

use App\Config\AppBase;




class Uri  
{

	public $conn;


	function __construct()
	{
		// ini_set('display_errors', 1);
		// ini_set('display_startup_errors', 1);

		// error_reporting(E_ALL);

		// return $this->getDebug(APP_STATE);		

	}	


	public static function baseUrl($segment = null, $param1 = null,$param2 = null ) 
	{

		if (empty($segment)) {

			return AppBase::APP_BASE_URL;

		} else {

			return AppBase::APP_BASE_URL.$segment;
		}


	// return AppBase::APP_BASE_URL;

	// print_r(on)


	}    							
}
