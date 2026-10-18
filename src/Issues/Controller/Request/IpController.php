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

  // public function view($fileName,array $params = null)
 public function view($fileName, $params = null)
 {

  // $result = shell_exec('php resources/views/'.$fileName.'.php');

   // $data = serialize($params);

   // $data = implode(", ", $params);

   // $data = join(" | ", $params);

   $data = json_encode($params);

   $result = shell_exec('php resources/views/'.$fileName.'.php params='.$data);


   // $result = shell_exec('php app/Http/Displays/'.$ccontrollerName.'/'.$mmethodName.'.php params='.$params);  

    // $result = shell_exec('php resources/views/welcome.php');   

   echo $result;  

} 

public function redirectGo($uri)
{   

   header('Location: '.$uri);

   exit;

}      

}

// $main = new MainController();
// $controller = new Controller();
// var_dump($user);
// var_dump($controller);
// exit;
// $user->index('Apple', 'Red');
// $main->output('test');
// $main->output();
