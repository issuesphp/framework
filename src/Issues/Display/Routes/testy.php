<?php
namespace Issues\Display\Routes;

function routeResp($ccontrollerName , $mmethodName ) {


	$result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php');


	echo $result;	

	
}

// routeResp($routeNameController , $routeNameMethod);
