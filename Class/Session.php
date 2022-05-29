<?php

class Session{

    static Session $instance;

    static function getInstance(): Session
    {
        if(!self::$instance){
            self::$instance = new Session();
        }
        return self::$instance;
    }

    public function __construct(){
        session_start();
    }

}
