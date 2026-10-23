<?php

namespace Issues\Lang;


use App\Config\AppBase;

use App\Lang\En\EnWelcome;

use App\Lang\Es\EsWelcome;




class Lang  
{



	public static function getLang()
	{ 

		

		switch (AppBase::APP_LOCALE) {
			case "en":

			return EnWelcome::OPTIONS;	

			break;		
			case "es":	

			return EsWelcome::OPTIONS;	

			break;
			default:

			echo "Lenguage not Found";					
		}

		

		



	}	


}
