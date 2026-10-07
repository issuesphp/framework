<?php

// function routeResp($ccontrollerName , $mmethodName ) {


// 	$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');


// 	echo $result;	


// }

function routeGet($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet,$param1 = null) {

	// print_r($ccontrollerName);
	// print_r($param1);
	// // print_r($segmentGet);

	// exit;

	// $error = shell_exec('php resources/views/errors/clean.php');
	// echo $error;

	if ($urlEnd == $segmentGet) {
		
		// echo "igual";

		// exit;

	// 	$error = shell_exec('php resources/views/errors/clean.php');
	// echo $error;


		$mayusfirstLetter = ucfirst($ccontrollerName);

	// print_r($mayusfirstLetter);

	// exit;

		$controllerFile = 'app/Http/Controllers/'.$mayusfirstLetter.'Controller'.'.php';

	// print_r($controllerFile);
	// exit;

		$displayFile = 'app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php';

	// if (file_exists($controllerFile)) {
	// 	echo "El archivo sí existe.";
	// } else {
	// 	echo "El archivo no existe.";
	// }

		if (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null) {

				// $param = escapeshellarg($param1);

			$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$param1);

			echo $result;	

		} elseif (file_exists($controllerFile)&&file_exists($displayFile)) {

			$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');
			echo $result;	

		} else {

			// header("HTTP/1.1 404 Not Found");
			// $error = shell_exec('php resources/views/errors/error_404.php');
			// echo $error;
		//exit elimina el duplicado de la vista
		// pero no se ejecuta la segunda funcion
		// exit;

		}


// 		if (file_exists($controllerFile)&&file_exists($displayFile)) {
// 		// echo "El archivo sí existe.";
// 		// exit;
// 			$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');
// 			echo $result;	
// 		} else {
// 		// echo "El archivo no existe.";
// 		}

// 		if (file_exists($controllerFile)&&file_exists($displayFile) && $param1 !=null) {
// 		// echo "El archivo sí existe.";
// 			// $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php'.'?param1='.$param1);

// 			// $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');

// 			// $param = escapeshellarg($param1);

// 			// print_r($param1);

// 			// exit;

// // no se usa query string, usa cli
// 			// $result = shell_exec('php prueba.php param1='.$param);

// 			$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php param1='.$param1);


// 			// $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php'.'?param1='.$param1);

// 			 // header('Location: app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php'.'?param1='.$param1);		

// 			// print_r($param1);
// 			echo $result;	
// 		} else {
// 		// echo "El archivo no existe.";
// 		}


	// $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');

	}else {
		// $result = shell_exec('php resources/views/errors/error_404.php');
		header("HTTP/1.1 404 Not Found");
		// $error = shell_exec('php resources/views/errors/error_404.php');
		// echo $error;
		//exit elimina el duplicado de la vista
		// pero no se ejecuta la segunda funcion
		// exit;	
	}

	// $error = shell_exec('php resources/views/errors/error_404.php');
	// echo $error;



	// echo $result;	

	
}

function routeInit() {

	$result = shell_exec('php app/Http/Displays/welcome/index.php');

	echo $result;

	
}



