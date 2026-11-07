<?php

namespace Issues\Rule;



class Rule 
{

	public static function customRuleAccess($statusCode) {

	// echo $statusCode;

	// exit;	
		

		

		switch ($statusCode) {
			case "401":

			$result = shell_exec('php ../resources/views/errors/access_folder/error_401'.'.php');

			echo $result;

			break;	
			case "403":

			$result = shell_exec('php ../resources/views/errors/access_folder/error_403'.'.php');

			echo $result;

			break;		
			case "404":

			$result = shell_exec('php ../resources/views/errors/access_folder/error_404'.'.php');

			echo $result;	

			break;

			default:

			echo "Status Code not Found";						
		}	

	}

	public static function test() {	

		echo "test2";


	}

}



