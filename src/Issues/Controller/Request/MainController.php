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

  echo $result;  

}       

}

