<?php

namespace Issues\Debug;

use App\Config\AppBase;



class Debug 
{

	public static function getErrors() {
		

		switch (AppBase::APP_DEBUG) {
			case 1:

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);

			error_reporting(E_ALL);				

			break;

			default:

			ini_set('display_errors', 0);
			ini_set('display_startup_errors', 0);

			error_reporting(E_ALL);							
		}	

	}

	public static function test() {	

		echo "test2";


	}

}



