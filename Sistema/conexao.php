<?php
    define('servidor', 'localhost');
    define('banco', 'escola');
    define('usuario', 'root');       
    define('senha', '');
    
    try{
        $conexao = new PDO('mysql:host='. servidor . ';dbname=' . banco,usuario,senha);
        
    } catch (PDOException $e) {
        echo "Oops! Algo deu errado!";
        echo "Erro Gerado". $e->getMessage();
    }
    
?>

