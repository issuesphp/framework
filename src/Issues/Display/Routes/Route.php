<?php

namespace Issues\Display\Routes;

// function routeResp($ccontrollerName , $mmethodName ) {


// 	$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');


// 	echo $result;	


// }

class Route 
{


public static function get($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null,$param2 = null,$param3 = null) {

		// echo $param3;

		// exit;



		if ($urlEnd == $segmentGet) {	


			$mayusfirstLetter = ucfirst($ccontrollerName);


			$controllerFile = 'app/Http/Controllers/'.$mayusfirstLetter.'Controller'.'.php';

			$displayFile = 'app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php';



			if (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null && $param2 !=null && $param3 !=null) {


                 // echo "aqui";

                 // exit;

				// $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$param1.'&segment='.$param2.'&slug='.$param3);

				$params = array(
					"param1" => $param1,
					"param2" => $param2,
					"param3" => $param3          
				);

				$data = json_encode($params);

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$data);

				
				echo $result;


			} elseif (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null && $param2 !=null) { 

				// echo "aqui";

				// exit;

				// $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$param1.'&'.'segment='.$param2);

				// $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$param1.'&segment='.$param2);

				$params = array(
					"param1" => $param1,
					"param2" => $param2       
				);

				$data = json_encode($params);

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$data);	

				echo $result;

			} elseif (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null) {

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$param1);				

				echo $result;	

			} elseif (file_exists($controllerFile)&&file_exists($displayFile)) {

			 // echo "aqui";

				$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');
				echo $result;

			// return $result; 	

			} else {

			// header("HTTP/1.1 404 Not Found");
			// $error = shell_exec('php resources/views/errors/error_404.php');
			// echo $error;
		//exit elimina el duplicado de la vista
		// pero no se ejecuta la segunda funcion
		// exit;

			}



		}else {

			
			header("HTTP/1.1 404 Not Found");

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

public function test2() {	

	echo "test2";

	
}

}



