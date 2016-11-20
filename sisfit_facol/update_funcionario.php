<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$nome =$_GET['nome'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg']; 
$nascimento = $_GET['nascimento'];
$telefone =$_GET['telefone'];
$matricula = $_GET['matricula'];
$estadocivil = $_GET['estadocivil']; 
$nacionalidade =$_GET['nacionalidade'];
$naturalidade = $_GET['naturalidade'];
$ufnaturalidade = $_GET['ufnaturalidade']; 
$admissao =$_GET['admissao'];
$saida = $_GET['saida'];
$sexo = $_GET['sexo'];
$deficiente = $_GET['deficiente']; 
$obsdeficiente =$_GET['obsdeficiente'];
$nomepai= $_GET['nomepai'];
$nomemae = $_GET['nomemae']; 
$apelido = $_GET['apelido'];
$funcao = $_GET['funcao'];
$numcarteira = $_GET['numcarteira']; 
$seriecarteira =$_GET['seriecarteira'];

$uf_naturalidade = $_GET['uf_naturalidade'];
$turnotrab = $_GET['turnotrab']; 
$tipotrab =$_GET['tipotrab'];




$sql = "UPDATE funcionario SET nome='$nome', cpf ='$cpf', rg = '$rg', nascimento = '$nascimento', telefone = '$telefone', matricula = '$matricula', estadocivil = '$estadocivil', nacionalidade = '$nacionalidade', naturalidade = '$naturalidade', ufnaturalidade = '$ufnaturalidade', admissao = '$admissao', saida = '$saida', sexo = '$sexo', deficiente = '$deficiente', obsdeficiente = '$obsdeficiente', nomepai = '$nomepai', nomemae = '$nomemae', apelido = '$apelido', funcao = '$funcao', numcarteira = '$numcarteira', seriecarteira= '$seriecarteira', uf_naturalidade = '$uf_naturalidade', turnotrab= '$turnotrab', tipotrab = '$tipotrab' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>