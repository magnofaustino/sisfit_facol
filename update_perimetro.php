<?php
include ("conexao.php");
?>

<?php

$id =$_POST['id'];
$nome_aluno= $_POST['nome_aluno'];
$pescoco= $_POST['pescoco'];
$ombro_esq =$_POST['ombro_esq'];
$ombro_dir = $_POST['ombro_dir'];
$braco_rilex_esq = $_POST['braco_rilex_esq']; 
$braco_rilex_dir =$_POST['braco_rilex_dir'];
$braco_contra_esq = $_POST['braco_contra_esq'];
$braco_contra_dir = $_POST['braco_contra_dir']; 
$ante_braco_esq = $_POST['ante_braco_esq'];
$ante_braco_dir = $_POST['ante_braco_dir'];
$torax_rilex =$_POST['torax_rilex'];
$torax_insp =$_POST['torax_insp'];
$cintura =$_POST['cintura'];
$abdomen =$_POST['abdomen'];
$quadril =$_POST['quadril'];
$coxa_esq =$_POST['coxa_esq'];
$coxa_dir =$_POST['coxa_dir'];
$pantu_esq =$_POST['pantu_esq'];
$pantu_dir =$_POST['pantu_dir'];

$sql = "UPDATE perimetros SET nome_aluno='$nome_aluno' ,pescoco='$pescoco' ,ombro_esq='$ombro_esq' ,ombro_dir='$ombro_dir' ,braco_rilex_esq='$braco_rilex_esq' ,braco_rilex_dir='$braco_rilex_dir' ,braco_contra_esq='$braco_contra_esq' ,braco_contra_dir='$braco_contra_dir' ,ante_braco_esq ='$ante_braco_esq' ,ante_braco_dir='$ante_braco_dir' ,torax_rilex='$torax_rilex' ,torax_insp='$torax_insp' ,cintura='$cintura' ,abdomen='$abdomen' ,quadril='$quadril' ,coxa_esq='$coxa_esq' ,coxa_dir='$coxa_dir' ,pantu_esq='$pantu_esq' ,pantu_dir='$pantu_dir' WHERE id ='$id'";




if (mysqli_query($conn, $sql)) {
    echo "Perimetros Atualizado com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>