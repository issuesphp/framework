<?php

namespace Issues\Config\App;


class App 
{
   
    public const PATH_COMMANDS = 'g++ vendor/issuesphp/framework/o.c -o o $(mysql_config --cflags --libs) && ./o';

     public const ISSUESPHP_VERSION = 'v1.3.0';
    

   
}