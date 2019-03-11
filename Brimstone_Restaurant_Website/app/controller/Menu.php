<?php

class Menu{
    public function __construct(){
        return $this->display();
    }

    public function display(){
        require_once '../app/views/menu.php';
    }
}