<?php

class Contact{
    public function __construct(){
        return $this->display();
    }

    public function display(){
        require_once '../app/views/contact.php';
    }
}