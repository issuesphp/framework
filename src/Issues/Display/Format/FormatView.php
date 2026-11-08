<?php

namespace Issues\Display\Format;



class FormatView 
{	

	public static function getArrayObjectFormat($argv) {
		

		if (isset($argv[1])) {
			parse_str($argv[1], $_GET); 
		}

		$params = $_GET['params'] ?? '';

		// return $params;

		// 1. Agrega comillas a las llaves/claves (ej: users:, id:, email:)
		$json = preg_replace('/([{\s,])(\w+)(:)/', '$1"$2"$3', $params);

// 2. Agrega comillas a los valores de texto (cartas, números, puntos, arrobas)
		$json = preg_replace('/:([a-zA-Z0-9@._-]+)/', ':"$1"', $json);

// 3. Decodifica el JSON resultante a un array asociativo de PHP
		// $data = json_decode($json, true);

		$data = json_decode($json);

		// print_r($fixedJson);

		// exit; 
		

		return $data; 


	}
	

	public static function getObjectFormat($argv) {
		

		if (isset($argv[1])) {
			parse_str($argv[1], $_GET); 
		}

		$params = $_GET['params'] ?? '';



		$jsonValid = preg_replace('/([a-zA-Z0-9_]+)\s*:\s*([^}]+)/', '"$1": "$2"', $params);


		$jobject = json_decode($jsonValid);

		return $jobject; 


	}

	public static function getOneObjectFormat($argv) {

		

		if (isset($argv[1])) {
			parse_str($argv[1], $_GET); 
		}

		$params = $_GET['params'] ?? '';		


		$jobject = json_decode($params);

		return $jobject; 


	}

	
	public static function test() {	

		echo "test2";


	}

}



