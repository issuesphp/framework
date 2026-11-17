<?php

namespace Issues\Helper;



class Hash  
{

	


	public static function randomNumber($param1,$param2) 
	{

		$randomNumber = rand($param1,$param2);

		return $randomNumber;


	}    							
}
