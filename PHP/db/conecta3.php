<?php

class Conecta3{

    
        private $url = "localhost";
        private $user = "root";
        private $password = "senac";
        private $base = "dblivro";
    
        public function conectadb(){
            return mysqli_connect($this->url, $this->user, 
                    $this->password, $this->base);
        }
    }

?>