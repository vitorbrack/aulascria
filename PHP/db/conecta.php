<?php

class Conecta{

    private $url = "localhost";
    private $user = "root";
    private $password = "senac";
    private $base = "dbphp01";
    public $db;
    

    public function __construct()
    {
      $db =  $this->conectadb;     
    }

    public static function conectadb(){
        return mysqli_connect($this->getUrl(),$this->getUser(),$this->getPassword(),$this->getBase())
        or die('Erro: '.mysqli_errno($link));
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of base
     */ 
    public function getBase()
    {
        return $this->base;
    }
}

?>