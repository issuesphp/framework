<?php


define('PATH_APP', 'vendor/issuesphp/framework/src/Issues/Config/App/app.php');

define('PATH_COMMANDS', 'g++ vendor/issuesphp/framework/o.c -o o $(mysql_config --cflags --libs) && ./o');

define('PATH_ROUTE', 'vendor/issuesphp/framework/src/Issues/Display/Routes/Route.php');

define('PATH_MAIN', 'vendor/issuesphp/framework/src/Issues/Config/App/path.php');

define('PATH_CONTROLLER', 'vendor/issuesphp/framework/src/Issues/Controller/Request/IpController.php');

define('PATH_MODEL', 'vendor/issuesphp/framework/src/Issues/Model/IpModel.php');


?>