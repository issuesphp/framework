<?php


function routeResp($ccontrollerName , $mmethodName, $urlEnd ,$segmentGet) {

	

	if ($urlEnd == $segmentGet) {
		


		$mayusfirstLetter = ucfirst($ccontrollerName);

	

		$controllerFile = 'app/Http/Controllers/'.$mayusfirstLetter.'Controller'.'.php';


		$displayFile = 'app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php';



		if (file_exists($controllerFile)&&file_exists($displayFile)) {
	
			$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');
		
		} else {
		
		}


	

	}else {
		
		header("HTTP/1.1 404 Not Found");
		
	}

	


	echo $result;	

	
}

function routeInit() {

	$result = shell_exec('php app/Http/Displays/welcome/index.php');

	echo $result;

	
}



