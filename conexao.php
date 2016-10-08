<?php

/* 
Conexão ao banco de dados.
 */

$conexao = "localhost";
$user = "root";
$senha = "";
$alias = "sisfit";

$mysqli = new mysqli($conexao,$user,$senha,$alias) or die ("Erro ao conectar ao DB");

// Checando Conexão

if ($mysqli->connect_errno)
  {
  echo "Falha na conexão com o banco de dados: (".$mysqli->connect_errno.")".$mysqli->connect_error;
  }

  ?>