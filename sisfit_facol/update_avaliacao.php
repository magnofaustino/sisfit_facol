<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$n_aluno = $ras['n_aluno'];
$obj_atividade = $ras['obj_atividade'];
              $atv_atual = $ras['atv_atual'];
              $tipo_med = $ras['tipo_med'];
              $tipo_cirg = $ras['tipo_cirg'];
              $tipo_doenca = $ras['tipo_doenca'];
              $obs_aval = $ras['obs_aval'];

$sql = "UPDATE avaliacao SET obj_atividade='$obj_atividade',atv_atual='$atv_atual',tipo_med = '$tipo_med',tipo_cirg= '$tipo_cirg',tipo_doenca= '$tipo_doenca',obs_aval= '$obs_aval' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>