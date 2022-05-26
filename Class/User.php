<?php

class User {
    private $id;
    private $login;
    private $password;
    private $email;
    private $is_admin;
    private $is_connected;
    private $is_register;
    private $is_logout;



    public function __construct() {
        $this->is_connected = false;
        $this->is_register = false;
        $this->is_logout = false;

    }

    public function getIsAdmin(){
        return $this->is_admin;
    }
    public function getIsLogged(){
        return $this->is_logged;
    }
    public function getIsConnected(){
        return $this->is_connected;
    }
    public function getIsRegister(){
        return $this->is_register;
    }
    public function getIsLogout(){
        return $this->is_logout;
    }
    public function setIsLogout($is_logout){
        $this->is_logout = $is_logout;
    }
    public function setIsRegister($is_register){
        $this->is_register = $is_register;
    }
    public function setIsConnected($is_connected){
        $this->is_connected = $is_connected;
    }
    public function setIsAdmin($is_admin){
        $this->is_admin = $is_admin;
    }
    

}