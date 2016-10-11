<?php

/* 
Conexão ao banco de dados.
 */

$conexao = "localhost";
$user = "root";
$senha = "sos101os";
$alias = "sisfit";

$con = mysql_connect($conexao,$user,$senha);

if (!$con) {
    die('Não foi possível conectar: ' . mysql_error());
}

echo 'Conexão bem sucedida';

$s= mysql_select_db("sisfit") or die ("Erro ao Selecionar o Bando de Dados");

if($s){

echo("banco selecionado com sucesso");
}

?>
