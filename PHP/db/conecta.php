<?php

class Conecta{

    private $url = "localhost";
    private $user = "root";
    private $password = "senac";
    private $base = "dbphp01";
    public $db;

    public function conectadb(){
        return mysqli_connect($this->url, $this->user, 
                $this->password, $this->base);
    }
}
   
?>