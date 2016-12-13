<?php
include ("conexao.php");
?>

<?php
$id =$_POST['id'];
$nome =$_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg']; 
$nascimento = $_POST['nascimento'];
$telefone =$_POST['telefone'];
$matricula = $_POST['matricula'];
$estadocivil = $_POST['estadocivil']; 
$nacionalidade =$_POST['nacionalidade'];
$naturalidade = $_POST['naturalidade'];
$ufnaturalidade = $_POST['ufnaturalidade']; 
$admissao =$_POST['admissao'];
$saida = $_POST['saida'];
$sexo = $_POST['sexo'];
$deficiente = $_POST['deficiente']; 
$obsdeficiente =$_POST['obsdeficiente'];
$nomepai= $_POST['nomepai'];
$nomemae = $_POST['nomemae']; 
$apelido = $_POST['apelido'];
$funcao = $_POST['funcao'];
$numcarteira = $_POST['numcarteira']; 
$seriecarteira =$_POST['seriecarteira'];
$uf_naturalidade = $_POST['uf_naturalidade'];
$turnotrab = $_POST['turnotrab']; 
$tipotrab =$_POST['tipotrab'];
$limitacao =$_POST['limitacao'];
$tipo_lim =$_POST['tipo_lim'];



$sql = "UPDATE funcionario SET nome='$nome', cpf ='$cpf', rg = '$rg', nascimento = '$nascimento', telefone = '$telefone', matricula = '$matricula', estadocivil = '$estadocivil', nacionalidade = '$nacionalidade', naturalidade = '$naturalidade', ufnaturalidade = '$ufnaturalidade', admissao = '$admissao', saida = '$saida', sexo = '$sexo', deficiente = '$deficiente', obsdeficiente = '$obsdeficiente', nomepai = '$nomepai', nomemae = '$nomemae', apelido = '$apelido', funcao = '$funcao', numcarteira = '$numcarteira', seriecarteira= '$seriecarteira', uf_naturalidade = '$uf_naturalidade', turnotrab= '$turnotrab', tipotrab = '$tipotrab',limitacao= '$limitacao' ,tipo_lim='$tipo_lim' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
 echo"<script language='javascript' type='text/javascript'>alert('Cadastro feito com Successo');window.location.href='funcionario.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>