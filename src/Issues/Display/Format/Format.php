<?php

namespace Issues\Display\Format;



class Format 
{

	public static function getArrayFormat($argv) {

		

		if (isset($argv[1])) {
			parse_str($argv[1], $_GET); 
		}

		$params = $_GET['params'] ?? '';


		$jsonValid = preg_replace('/([a-zA-Z0-9_]+)\s*:\s*([^}]+)/', '"$1": "$2"', $params);


		$jobject = json_decode($jsonValid, true);

		return $jobject; 


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

	public static function getOneArrayFormat($argv) {

		

		if (isset($argv[1])) {
			parse_str($argv[1], $_GET); 
		}

		$params = $_GET['params'] ?? '';
		


		$jobject = json_decode($params, true);

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



