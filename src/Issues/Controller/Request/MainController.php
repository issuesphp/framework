<?php

namespace Issues\Controller\Request;


class MainController 
{


  public function output($result)
  {   

    echo $result;  

  }

  public function view($fileName,array $params = null)
  {

    $result = shell_exec('php resources/views/'.$fileName.'.php');

    if (empty($result)) {

     header("HTTP/1.1 404 Not Found");
     echo "404 - Sorry, the landing page does not exist.";

    }else{

      echo $result;  
    }   

   

  }       

}


