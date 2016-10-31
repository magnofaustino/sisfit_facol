<?php
include ("conexao.php");
?>

<?php

$nome = $_GET['nome'];



$sql = "UPDATE tb_aluno SET nome='$nome', cpf ='0998' WHERE id='1'";






if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>