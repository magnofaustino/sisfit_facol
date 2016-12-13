<?php
include ("conexao.php");
?>

<?php
$id =$_POST['id'];
$nome =$_POST['nome_1'];
$cpf = $_POST['nome_2'];
$rg = $_POST['nome_3']; 
$telefone =$_POST['nome_4'];
$matricula = $_POST['nome_5'];
$estadocivil = $_POST['nome_6']; 
$nacionalidade =$_POST['nome_7'];
$naturalidade = $_POST['nome_8'];
$ufnaturalidade = $_POST['nome_9']; 
$nascimento =$_POST['nome_10'];
$sexo = $_POST['nome_11'];
$deficiente = $_POST['nome_12']; 
$obs_deficiente =$_POST['nome_13'];


$sql = "UPDATE produtos SET nome='$nome', des ='$cpf', vcusto = '$rg', vvenda = '$telefone', umedida = '$matricula', qproduto = '$estadocivil', grupo = '$nacionalidade', tipo = '$naturalidade', garantia = '$ufnaturalidade', tempgarantia = '$nascimento', garantia = '$sexo', dtcompra = '$deficiente', fornecedor = '$obs_deficiente', bloqueado = '$email' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
     echo"<script language='javascript' type='text/javascript'>alert('Atulização feita com Successo');window.location.href='produto.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>