<?php

namespace Issues\Display\Fragment;



class Fragment 
{

	public static function include($fileName) {	
		

		$result = shell_exec('php resources/views/'.$fileName.'.php');


		echo $result;		

	}

	public static function metaDescription($content) {	
		
		// $data = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');

		$result = '<meta name="description" content="'.$content.'">';


		echo $result;		

	}

	

	// public static function includeSecond($fileName) {	


	// 	$result = shell_exec('php resources/views/inc/'.$fileName.'.php');


	// 	echo $result;		

	// }
	

	public static function test() {	

		echo "test2";


	}

}



