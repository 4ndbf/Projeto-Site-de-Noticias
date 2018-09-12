<?php
    session_start();
    //Recebe os valores passados via form html
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $host = "localhost";
    $basedados = "banco_de_noticias";
    
    //coloca esses dados recebidos acima na sessao
    $_SESSION["host"] = $host;
    $_SESSION["usuario"] = $usuario;
    $_SESSION["senha"] = $senha;
    $_SESSION["basedados"] = $basedados;
    
    //Inicia conexão com a base de dados, o resultado é guardado na var $conexao
    $conexao = mysqli_connect($host, $usuario, $senha, $basedados);
    var_dump($conexao);
    @$_SESSION["conexao"] = $conexao;

     //decide o que fazer caso a conexao consiga ser feita, e quando não consegue se conectar
    if(mysqli_connect_errno($conexao)){
        header("Location: pagina_erro.php");
    } else{
        header("Location: painel_de_controle.php");
    }
    
    //Seleciona a base de dados a ser utilizada
    @mysqli_select_db($conexao, $basedados);
?>
