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
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

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
                header("location:TM.php");
        } else {
                header("location:index.php");
        }
            
    }
}
function inserirFicJog($a, $b, $c)
{
    $conexao = conectar();
    $sql = "INSERT INTO ficha (id, id_or, id_de) VALUES ('$a', '$b', '$c')";
    return mysqli_query($conexao, $sql);
}
function selecionarJogNome(string $a)
{
    $conexao = conectar();
    $sql = "SELECT * FROM jogador WHERE nome='$a'";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}
function selecionarJogID($a)
     {
    $conexao = conectar();
    $sql = "SELECT * FROM jogador WHERE id='$a'";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
     }
function selecionarHistoria($a)
{
    $conexao = conectar();
    $sql = "SELECT * FROM historia WHERE id='$a'";
    $resultado = mysqli_query($conexao, $sql);
    return  mysqli_fetch_all($resultado, MYSQLI_ASSOC);
} 
function selecionarEscolha($a)
{
    $conexao = conectar();
    $sql = "SELECT * FROM escolha WHERE id_or='$a'";
    $resultado = mysqli_query($conexao, $sql);
    return  mysqli_fetch_all($resultado, MYSQLI_NUM);
}
function listarJog()
{
    $conexao = conectar();
    $sql = "SELECT * FROM jogador";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}
function selecionarHist($a)
{
    $conexao = conectar();
    $sql = "SELECT * FROM historico WHERE id='$a'";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_all($resultado, MYSQLI_NUM);
} 
function exibirHistorico($a)
{
    $in = 1;
    $ini = selecionarHistoria($in);
    $hist = selecionarHist($a);
    $historico = selecionarHistoria($hist[0][1]);
    echo $ini[0]['descricao'] . '<br>';
    echo $historico[0]['descricao'] . '<br>';
    for ($i = 0; $i < count($hist); $i++) {
        $historico = selecionarHistoria($hist[$i][2]);
        echo '<br>' . $historico[0]['descricao'] . '<br>';
    }
}