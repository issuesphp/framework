<?php

namespace Issues\Service;

use App\Config\AppBase;


class Service  
{	 

	
	public static function requestGet($segment,$param1 = null,$param2 = null) {

		// $segment = '/api/modules/getcol';
		// $model_name = 'postfree';

		// print_r(AppBase::APP_ENDPOINT);

		// exit;

		$endpoint = AppBase::APP_ENDPOINT.'/'.$segment.'/'.$param1;

		// print_r($endpoint);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $endpoint);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

		$response = curl_exec($ch);

		// print_r($response);

		if (curl_errno($ch)) {
			echo 'Error: ' . curl_error($ch);
		} else {
        // echo $response;
		}

		curl_close($ch);


		$result = json_decode($response);

		print_r($result);

		// return $result;


	}



}
