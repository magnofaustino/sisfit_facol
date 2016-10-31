<?php
include ("conexao.php");   


$sql = "UPDATE tb_aluno SET nome='Doe' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
