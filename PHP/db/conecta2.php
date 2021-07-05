<?php

class Conecta2{

    private $url = "localhost";
    private $user = "root";
    private $password = "senac";
    private $base = "dbproduto";
    public $db;

    public function conectadb(){
        return mysqli_connect($this->url, $this->user, 
                $this->password, $this->base);
    }
}
   
?>