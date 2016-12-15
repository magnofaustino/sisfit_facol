<?php
include ("conexao.php");
?>

<?php


echo $nome_2 =$_POST['nome2'];

 


$sql = "INSERT INTO dado (	nome) VALUES ($nome_2)";



if (mysqli_query($conn, $sql)) {
     echo "cadastrardo";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>
