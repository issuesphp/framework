<?php

namespace Issues\Display\Routes;

// function routeResp($ccontrollerName , $mmethodName ) {


// 	$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');


// 	echo $result;	


// }

class Route 
{


	public static function get($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null) {

		$display = self::getDisplay($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null);

		// self::options($routeNumber,$ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null);

	}

	// public static function get1($routeNumber,$ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null) {

	// 	// $display = self::getDisplay($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null);

	// 	self::options($routeNumber,$ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null);

	// }

	// public static function options($routeNumber,$ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null) {


	// 	switch ($routeNumber) {
	// 		case 1:			
	// 		// echo json_encode("admin");

	// 		$display = self::getDisplay($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null);

	// 		redirect(base_url('dashboard'));		
	// 		break;		
	// 		case 2:	

	// 		$display = self::getDisplay($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null);	

	// 		break;					
	// 	}

		

	// }

	public static function getDisplay($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null) {

		// echo $routeNumber;

		// exit;



	// if ($routeNumber = 3 && $urlEnd == $segmentGet) {
		if ($urlEnd == $segmentGet) {
		// if ($mmethodName == $urlEnd && $urlEnd == $segmentGet) {

			$mayusfirstLetter = ucfirst($ccontrollerName);


			$controllerFile = 'app/Http/Controllers/'.$mayusfirstLetter.'Controller'.'.php';

			$displayFile = 'app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php';	

			switch (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null && $param2 !=null && $param3 !=null) {
				// case 0:			
				// echo "falso 3 parans";



				// break;		
				case 1 :

				$params = array(
					"param1" => $param1,
					"param2" => $param2,
					"param3" => $param3          
				);

				$data = json_encode($params);

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$data);


				echo $result;		
				break;					
			}

			//end 3 params

			switch (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null && $param2 !=null) {
				// case 0:			
				// echo "falso 2 parans";



				// break;		
				case 1 :

				$params = array(
					"param1" => $param1,
					"param2" => $param2       
				);

				$data = json_encode($params);

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$data);	

				echo $result;	
				break;					
			}

			//end 2 params

			switch (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null) {
				// case 0:			
				// echo "falso 1 parans";



				// break;		
				case 1 :

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$param1);				

				echo $result;	
				break;					
			}

			//end 1 params

			switch (file_exists($controllerFile)&&file_exists($displayFile)) {
				// case 0:			
				// echo "falso 0 parans";



				// break;		
				case 1 :

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');
				echo $result;	
				break;					
			}

		// end segnment
		} 

	}

	public static function post($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null) {

		// cuarto parametro
		// print_r($segmentGet);

		// print_r($param1);
		// exit;


		if ($urlEnd == $segmentGet) {



			$mayusfirstLetter = ucfirst($ccontrollerName);


			$controllerFile = 'app/Http/Controllers/'.$mayusfirstLetter.'Controller'.'.php';



			$displayFile = 'app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php';


			if (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null) {

			// echo "aqui";

				// $param = escapeshellarg($param1);

				$data = json_encode($param1);

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$data);

				echo $result;
			// return $result; 	

			}


		}else {
		// $result = shell_exec('php resources/views/errors/error_404.php');
			header("HTTP/1.1 404 Not Found");

		}



	}

	public static function init() {

		$result = shell_exec('php app/Http/Displays/welcome/index.php');

		echo $result;


	}

	public static function test() {	

		echo "test";


	}

	public static function otro2() {	

		echo "test2";


	}

	public function test2() {	

		echo "test2";


	}

}



