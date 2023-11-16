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
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nom'];
    $email = $_POST['eml'];
    $senha = $_POST['snh'];

    $conexao = conectar();
    $sql = "INSERT INTO jogador(nome, email, senha) VALUES ('$nome','$email','$senha')";
    return mysqli_query(conectar(), $sql);
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM jogador WHERE Email='$email';";
    $resultado = mysqli_query(conectar(), $sql);  

    if(mysqli_num_rows($resultado) > 0){
        $dados = mysqli_fetch_assoc($resultado);
        if($senha == $dados['Senha']){
            session_start();
            $_SESSION["idJog"] = $dados['ID'];
            $_SESSION["Jogador"] = $dados['Nome'];
                header("location:TM.php");
        } else {
                header("location:index.php");
        }
            
    }
}