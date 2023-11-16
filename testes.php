<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="auxiliar.css">
  <title>Transição com GIF</title>
</head>
<body>
  <img class="transition-gif" src="IMG/Papel.gif" alt="GIF de transição">
  <div class="container">
  <div class="page current-page" id="pagina1">
  <form class="formulario" method="POST"> 
        <div class="field">
            <label for="nome">Email:</label>
            <input type="text" name="eml" placeholder='nome@mail.com' required>
        </div>
        
        <div class="field">
            <label for="telefone">Senha:</label>
            <input type="text" name="snh" placeholder='********'>
        </div>
        <button class="botao-imagem" onclick="navegarParaPagina2()" type="submit" name="login"> Fazer Anotações </button>
        <button class="botao-imagem" onclick="navegarParaPagina2()"><a style="text-decoration: none;color: inherit;"href="TC.php">Novo Escritor</a></button>
</form>
  </div>
  </div>

  <!-- Página 2 -->
  <div class="page" id="pagina2">
    <?php
    if(isset($_POST['login'])){
      $email = $_POST['eml'];
      $senha = $_POST['snh'];
      if(isset($email) == TRUE){
              session_start();
              $_SESSION["idJog"] = $email;
              $_SESSION["Jogador"] = $senha;
                  header("location:TM.php");
          } else {
                  header("location:index.php");
          }
              
      }
    ?>
    <button onclick="navegarParaPagina1()">Voltar para a página 1</button>
  </div>

  <script>
    function navegarParaPagina2() {
      exibirGIF();
      setTimeout(function () {
        document.getElementById('pagina1').classList.remove('current-page');
        document.getElementById('pagina2').classList.add('current-page');
        ocultarGIF();
      }, 1000); // Aguarde 1 segundo antes de trocar de página
    }

    function navegarParaPagina1() {
      exibirGIF();
      setTimeout(function () {
        document.getElementById('pagina2').classList.remove('current-page');
        document.getElementById('pagina1').classList.add('current-page');
        ocultarGIF();
      }, 1000); // Aguarde 1 segundo antes de trocar de página
    }

    function exibirGIF() {
      $('.transition-gif').fadeIn();
    }

    function ocultarGIF() {
      $('.transition-gif').fadeOut();
    }
  </script>

</body>
</html>
