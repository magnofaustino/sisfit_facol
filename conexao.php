<?php
$conexao = "localhost";
$user = "root";
$senha = "sos101os";
$alias = "sisfit"; 
     
$mysqli = new mysqli($conexao,$user,$senha,$alias) or die ("Erro ao conectar ao DB");
    
if($mysqli){
    echo ("conectado com sucesso");
    
}

?>   