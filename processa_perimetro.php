<?php
include ("conexao.php");
?>

<?php

require_once "class_perimetro.php"; 

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

$prd= new perimetro();
$prd->setNome_Aluno($nome_aluno);
$prd->setPescoco($pescoco);
$prd->setOmbro_Esq($ombro_esq);
$prd->setOmbro_Dir($ombro_dir);
$prd->setBraco_Rilex_Esq($braco_rilex_esq);
$prd->setBraco_Rilex_Dir($braco_rilex_dir);
$prd->setBraco_Contra_Esq($braco_contra_esq);
$prd->setBraco_Contra_Dir($braco_contra_dir);
$prd->setAnte_Braco_Esq($ante_braco_esq);
$prd->setAnte_Braco_Dir($braco_rilex_dir);
$prd->setTorax_Rilex($torax_rilex);
$prd->setTorax_Insp($torax_insp);
$prd->setCintura($cintura);
$prd->setAbdomen($abdomen);
$prd->setQuadril($quadril);
$prd->setCoxa_Esq($coxa_esq);
$prd->setCoxa_Dir($coxa_dir);
$prd->setPantu_Esq($pantu_esq);
$prd->setPantu_Dir($pantu_dir);

$sql = "INSERT INTO perimetros ( nome_aluno ,pescoco ,ombro_esq ,ombro_dir ,braco_rilex_esq ,braco_rilex_dir ,braco_contra_esq ,braco_contra_dir ,ante_braco_esq ,ante_braco_dir ,torax_rilex ,torax_insp ,cintura ,abdomen ,quadril ,coxa_esq ,coxa_dir ,pantu_esq ,pantu_dir) VALUES ('".$prd->getNome_Aluno()."','".$prd->getPescoco()."','".$prd->getOmbro_Esq()."', '".$prd->getOmbro_Dir()."', '".$prd->getBraco_Rilex_Esq()."', '".$prd->getBraco_Rilex_Dir()."', '".$prd->getBraco_Contra_Esq()."', '".$prd->getBraco_Contra_Dir()."', '".$prd->getAnte_Braco_Esq()."','".$prd->getAnte_Braco_Dir()."', '".$prd->getTorax_Rilex()."', '".$prd->getTorax_Insp()."', '".$prd->getCintura()."', '".$prd->getAbdomen()."', '".$prd->getQuadril()."', '".$prd->getCoxa_Esq()."', '".$prd->getCoxa_Dir()."', '".$prd->getPantu_Esq()."', '".$prd->getPantu_Dir()."')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>
