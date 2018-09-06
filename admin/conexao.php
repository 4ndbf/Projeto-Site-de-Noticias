<html>
    <head>
        <meta charset="UTF-8">
        <title>Notícias Online</title>
        <link rel="stylesheet" type="text/css" href="/CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="/CSS/botoes.css">
        <link rel="icon" href="/IMG/favicon.ico" />
    </head>
<?php
    session_start();
    //Recebe os valores passados via form html
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $host = "127.0.0.1";
    $basedados = "banco_de_noticias";
    
    //coloca esses dados recebidos acima na sessao
    $_SESSION["host"] = $host;
    $_SESSION["usuario"] = $usuario;
    $_SESSION["senha"] = $senha;
    $_SESSION["basedados"] = $basedados;
    
    //Inicia conexão com a base de dados, o resultado é guardado na var $conexao
    @$conexao = mysqli_connect($host, $usuario, $senha, $basedados);
    @$_SESSION["conexao"] = $conexao;
    $_SESSION["teste"] = "Mensagem";

     //decide o que fazer caso a conexao consiga ser feita, e quando não consegue se conectar
    if(mysqli_connect_errno($conexao)){
        include_once 'paginaerro.php';
    } else{
        include_once 'painel_de_controle.php';
    }
    
    //Seleciona a base de dados a ser utilizada
    @mysqli_select_db($conexao, $basedados);
?>
</html>