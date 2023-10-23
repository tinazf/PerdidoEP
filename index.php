<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<h1> Login </h1>
<div class="row">
<form action="funcoes.php" method="POST">
<div class="form-group">
    <label> Usuário </label>
    <input class="form-control" type="text" name="email"/>
</div>
<div class="form-group">
    <label> Senha </label>
    <input class="form-control" type="text" name="senha"/>
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit" name="login"> Logar </button>
</div>
 </form>
</div>
</body>
</html>