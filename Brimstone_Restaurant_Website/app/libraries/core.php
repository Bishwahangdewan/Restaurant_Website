<?php
/* App Core class
   Creates url and loades core controller
   URL - format /controller/method/params

   */

   class Core{
       protected $currentController = 'Home';

       public function __construct(){
           $url = $this->geturl();
           //look in controllers for the first value
           if(file_exists('../app/controller/'.ucwords($url[0]).'.php')){
               $this->currentController = ucwords($url[0]);
               //unset   
               unset($url[0]);
           }

           //require the controller
           require_once '../app/controller/'.$this->currentController.'.php';

           //instantiate the controller
           $this->currentController = new $this->currentController;

       }

       public function geturl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');//remove whitespace
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
       }
   }

   ?>