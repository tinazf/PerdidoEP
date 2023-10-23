<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <br><a href="TJ.php?if=<?php echo $jogador['id']?>">Novo Jogo</a>
    <br>
    <br><a href="TJS.php">Continuar Jogo</a>
    <br>
    <br><a href="TA.php">Diario de Experiencia</a>
</body>
</html>