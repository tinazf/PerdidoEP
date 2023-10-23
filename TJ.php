<?php
session_start();
include_once('funcoes.php');

$id = $_SESSION['idJog'];
$sql = "SELECT * FROM jogador WHERE id='$id'";
$resultado = mysqli_query(conectar(), $sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SINOPSE</h1>
</body>
</html>