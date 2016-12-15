<?php
include ("conexao.php");
?>

<?php
             $id =$_POST['id'];
             
             $nome =$_POST['nome'];
$dia=$_POST['dia'];
             $exercicio = $_POST['exercicio']; 
             $serie = $_POST['serie']; 
             $repeticao =$_POST['repeticao'];
             $intervalo = $_POST['intervalo'];
             $obs = $_POST['obs']; 

$sql = "UPDATE segunda SET dia='$dia',nome='$nome',exercicio = '$serie',repeticao= '$repeticao',intervalo= '$intervalo',obs= '$obs' WHERE id= '$id'";




if (mysqli_query($conn, $sql)) {
     echo"<script language='javascript' type='text/javascript'>alert('Atualização Feita com Successo');window.location.href='treino.php';</script>";
          die();
   
} else {
      echo "erro ao atualizar";
}

mysqli_close($conn);


?>