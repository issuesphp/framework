<?php

namespace Issues\Lang;


use App\Config\App;

use App\Lang\En\EnWelcome;

use App\Lang\Es\EsWelcome;




class Lang  
{



	public static function getLang()
	{ 

		// print_r(App::APP_LOCALE);

		// print_r(EnWelcome::LANG_WELCOME);

		// exit;

		// echo "a";

		if (App::APP_LOCALE == 'en') {

			// print_r(EnWelcome::LANG_WELCOME);

			// return EnWelcome::LANG_WELCOME;

			return EnWelcome::OPTIONS;
			
			// return EnWelcome::LANG_WELCOME;
		}

		// $result = match(App::APP_LOCALE) {
		// 	'en' => return EnWelcome::LANG_WELCOME,
		// 	'es' => return EsWelcome::LANG_WELCOME,			
		// 	default => 'No Lang Found',
		// }

		// echo $result;

		



	}	


}
