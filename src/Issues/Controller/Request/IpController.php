<?php

namespace Issues\Controller\Request;


class IpController 
{

  function __construct()
   {
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);

      error_reporting(E_ALL);

   }  


  public function output($result)
  {   

    echo $result;  

  }

  public function view($fileName,array $params = null)
  {

    $result = shell_exec('php resources/views/'.$fileName.'.php');

    $error = shell_exec('php resources/views/errors/error_404.php');

    if (empty($result)) {

     header("HTTP/1.1 404 Not Found");
     echo $error;

    }else{

      echo $result;  
    }   

   

  }       

}


