<?php

function routeResp($ccontrollerName , $mmethodName ) {


	$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');


	echo $result;	

	
}

function routeInit() {

	$result = shell_exec('php app/Http/Displays/welcome/index.php');

	echo $result;

	
}



