<?php

namespace Issues\Helper;

use App\Config\AppBase;

class Uri  
{

	public static function baseUrl($segment = null) 
	{

		if (!empty($segment)) {

			return AppBase::APP_BASE_URL;

		}

		 // if ( $totalpostpremium >= 20) {

		// return throw new \Exception('APP_BASE_URL is empty');
      // } 

		return null;

		// if (empty($segment)) {

		// 	return AppBase::APP_BASE_URL;

		// } else {

		// 	return AppBase::APP_BASE_URL.$segment;
		// }


	// return AppBase::APP_BASE_URL;

	// print_r(on)


	}    							
}
