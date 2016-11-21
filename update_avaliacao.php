<?php
include ("conexao.php");
?>

<?php
             $id =$_GET['id'];
             $n_aluno=$_GET['n_aluno'];
             $obj_atividade =$_GET['obj_atividade'];
             $atv_atual = $_GET['atv_atual']; 
             $tipo_med = $_GET['tipo_med']; 
             $tipo_cirg =$_GET['tipo_cirg'];
             $tipo_doenca = $_GET['tipo_doenca'];
             $obs_aval = $_GET['obs_aval']; 

$sql = "UPDATE avaliacao SET obj_atividade='$obj_atividade',atv_atual='$atv_atual',tipo_med = '$tipo_med',tipo_cirg= '$tipo_cirg',tipo_doenca= '$tipo_doenca',obs_aval= '$obs_aval' WHERE id= $id";




if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>