<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1> Cadastrar </h1>
        <hr>
        <div class="row">

            <form action="funcoes.php" method="POST">

                <div class="form-group">
                    <label> Nome </label>
                    <input class="form-control" type="text" name="nome" required="required" />
                </div>

                <div class="form-group">
                    <label> Email </label>
                    <input class="form-control" type="text" name="email" required="required" />
                </div>

                <div class="form-group">
                    <label> Senha </label>
                    <input class="form-control" type="text" name="senha" required="required" />
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="cadastrar"> Cadastrar </button>
                </div>

            </form>
        </div>
</body>
</html>