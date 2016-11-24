<?php
include ("conexao.php");
?>

<?php
             $id =$_POST['id'];
             $n_aluno=$_POST['n_aluno'];
             $obj_atividade =$_POST['obj_atividade'];
             $atv_atual = $_POST['atv_atual']; 
             $tipo_med = $_POST['tipo_med']; 
             $tipo_cirg =$_POST['tipo_cirg'];
             $tipo_doenca = $_POST['tipo_doenca'];
             $obs_aval = $_POST['obs_aval']; 

$sql = "UPDATE avaliacao SET obj_atividade='$obj_atividade',atv_atual='$atv_atual',tipo_med = '$tipo_med',tipo_cirg= '$tipo_cirg',tipo_doenca= '$tipo_doenca',obs_aval= '$obs_aval' WHERE id= '$id'";




if (mysqli_query($conn, $sql)) {
    echo "Avaliação Atualizada com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>