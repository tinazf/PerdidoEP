<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="auxiliar.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    #loading-container {
      text-align: center;
      display: none;
    }

    #loading-image {
      width: 100px; /* Ajuste conforme necessário */
      height: auto;
    }

    #content {
      display: block;
    }
  </style>
  <title>Tela de Carregamento</title>
</head>
<body>
  <div id="loading-container">
    <img id="loading-image" src="IMG/Papel.gif" alt="Carregando...">
  </div>
    <!-- Seu conteúdo principal aqui -->
    <div class="container" id="content">
    <!-- Seu conteúdo aqui -->
             <form action='codigo.php' class="formulario" method="POST"> 
        <div class="field">
            <label for="nome">Email:</label>
            <input type="text" name="eml" placeholder='nome@mail.com' required>
        </div>
        
        <div class="field">
            <label for="telefone">Senha:</label>
            <input type="password" name="snh" placeholder='********'>
        </div>
        <button class="botao-imagem" type="submit" name="login"> Fazer Anotações </button>
</form>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      setTimeout(function() {
        document.getElementById("loading-container").style.display = "none";
        document.getElementById("content").style.display = "block";
      }, 3000); // Tempo de simulação de carregamento (3 segundos no exemplo)
    });
  </script>

</body>
</html>