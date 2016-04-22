<?php

date_default_timezone_set('America/Sao_Paulo');

class Conexao {
    
    private $user;
    private $pass;
    private $host;
    private $base;
    private $file;
    private $pdo;
    
    
    public function Connect() {
        
        try{
            
            $this->user = "root";
            $this->pass = "";
            $this->host = "localhost:8080";
            $this->base = "sistemaintegral";
            
            $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND -> "SET NAMES UTF8");
            
            
        } catch (Exception $ex) {

        }
        
    }
}