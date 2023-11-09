<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
    <style> 
        body {
            background-image: url('IMG/TLI.png');
            background-size:auto;
        }
        button {
			color: #ffffff;
			background-color: #000000;
			font-size: 15px;
			border: 1px solid #ffffff;
			padding: 5px 30px;
			cursor: pointer
		}
        .container {
            background-color: black;
            border-radius: 5%;
        } 
</style>
</head>
<body>
    <div class="row">
        <div class="col-sm">
            <div class="container">
        <h1> Login </h1>
                    <form method="post">
                        <div class="form-group">
                            <label> Usuário </label>
                            <input class="form-control" type="text" name="usuario" />
                        </div>
                        <div class="form-group">
                            <label> Senha </label>
                            <input class="form-control" type="text" name="senha" />
                        </div>
                        <div class="form-group">
                            <button class="button" type="submit" name="login"> Logar </button>
                        </div>
                    </form>
            </div>
        </div>
        <div class="col-sm"></div> 
        <div class="col-sm"></div> 
        <div class="col-sm"></div>
        <div class="col-sm"></div> 
        <div class="col-sm"></div> 
    </div>
</body>
</html>