<?php
header('content-type: text/html; charset=utf-8');
function conectar()
{
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco_dados = "bdd_pep";
    $conexao = mysqli_connect($host, $usuario, $senha, $banco_dados);
    if ($conexao) {
        mysqli_set_charset($conexao, 'utf8');
        return $conexao;
    } else {
        echo "Erro ao conectar a base de dados. " . mysqli_connect_error();
        die();
    }
} 
if (isset($_GET['']) == NULL) {
    header("location:index.php");
}
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nom'];
    $email = $_POST['eml'];
    $senha = $_POST['snh'];
    $hash = password_hash($senha,PASSWORD_DEFAULT);

    $conexao = conectar();
    $sql = "INSERT INTO jogador(nome, email, senha) VALUES ('$nome','$email','$hash')";
    return mysqli_query(conectar(), $sql);
}
if(isset($_POST['login'])){
    $email = $_POST['eml'];
    $senha = $_POST['snh'];

    $sql = "SELECT * FROM jogador WHERE email='$email'";
    $resultado = mysqli_query(conectar(), $sql);  

    if(mysqli_num_rows($resultado) > 0){
        $dados = mysqli_fetch_assoc($resultado);
        if(password_verify($senha,$dados['senha'])){
           
            session_start();
            $_SESSION["idJog"] = $dados['id'];
            $_SESSION["jog"] = $dados['nome'];

            header("location:TM.php");
        }
    } 
}