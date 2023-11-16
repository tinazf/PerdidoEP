<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="auxiliar.css">
  <title>PEP</title>
</head>
<body>
  <div class="container">
    <!-- Seu conteúdo aqui -->
             <form action='codigo.php' class="formulario" method="post"> 
        <div class="field">
            <label for="nome">Email:</label>
            <input type="text" name="eml" placeholder='nome@mail.com' required>
        </div>
        
        <div class="field">
            <label for="telefone">Senha:</label>
            <input type="text" name="snh" placeholder='********'>
        </div>
        <button class="botao-imagem" type="submit" name="login"> Fazer Anotações </button>
</form>
    </div>
  </div>
</body>
</html>