<?php
$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");

if($con){
 echo("banco conectado com sucesso");   
}


 $s= mysql_select_db("escola") or die ("erro ao selecionar o BD PROJETO BAR");
if($s){

echo("banco selecionado com sucesso");
}
?>