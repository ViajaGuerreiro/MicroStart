<?php
declare (strict_types = 1);



final class Conexao
{
    private static $instance;

     private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
    } 
    
    public static function getInstance() : PDO
    {
        if(!isset(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host=localhost; dbname=microstart; charset=utf8", 'root','root');
            }
             catch (PDOException $erro) {
                echo 'Erro no banco de dados: ' . $erro->getMessage();
            }
             catch (Exception $erroG) {
                echo 'Ocorreu um erro: ' . $erroG->getMessage();
            }
            
            
        }

        return self::$instance;
    }

}


?>