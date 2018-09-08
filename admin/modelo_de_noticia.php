<?php
    function gerar_modelo($conteudo){
        
        //recebe os valores usados para a conexao
        $senha = isset($_SESSION["senha"])? $_SESSION["senha"] : $senha = '';
        $host = $_SESSION["host"];
        $usuario = $_SESSION["usuario"];
        $basedados = $_SESSION["basedados"];
        
        //realiza a conexao com o banco de dados
        if(mysqli_connect_errno($conexao = mysqli_connect($host, $usuario, $senha, $basedados))){
                echo "<b>Erro de conexao com o banco de dados!</b>";
            }
        $titulo = $_SESSION['titulo'];
        //Conseguir o id da noticia recém criada
                    $id = mysqli_fetch_array(@mysqli_query($conexao, "select id from noticias where titulo = '$titulo' limit 1; "));
                    //Conseguir o conteúdo que já foi gravado no banco
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = $id[0]; "));
        
         //gravar o modelo dentro da variavel
        $conteudo = "
                <html>
                    <head>
                        <meta charset='utf8_general_ci'>
                        <title>$resultado[1]</title>
                        <link rel='stylesheet' type='text/css' href='../../CSS/tema.css'>
                        <link rel='stylesheet' type='text/css' href='../../CSS/botoes.css'>
                        <link rel='icon' href='/IMG/favicon.ico' />
                    </head>
                    <body>
                    <?php include_once '../navegacao.php';?>
                    <section>
                        <center><h2>$resultado[1]</h2></center>
                        <article id='corpo'>
                            <center><h3>$resultado[3]</h3><center>
                            <img id='noticiaimg' src='$resultado[7]'></img>
                            <p>$resultado[4]</p>
                            <p>Palavras-chave: $resultado[5]</p>
                            Data de publicação: $resultado[6]
                        </article>
                    </section>
                    </body>
                </html>";
        return $conteudo;
    }
?>

