<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Notícias Online</title>
        <link rel="stylesheet" type="text/css" href="/CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="/CSS/botoes.css">
        <link rel="icon" href="IMG/favicon.ico" />
    </head>
    
    <body>
        <?php
            //inclui a barra de links ao topo
            include_once '../../navegacao.php';
            
            //Inicia a sessão
            session_start();
            
            //Recebe os valores do form html
            $id = $_GET["id"];
            $slug = $_GET["slug"];
            $senha = $_POST["senha"];
            
            //recebe os valores usados para a conexao
            $host = $_SESSION["host"];
            $usuario = $_SESSION["usuario"];
            $basedados = $_SESSION["basedados"];
            
            //realiza a conexao com o banco de dados
            if(mysqli_connect_errno($conexao = mysqli_connect($host, $usuario, $senha, $basedados))){
                echo "Erro de conexao<br>";
            }
            
            //Executa o comando MYSQL_QUERRY para gravar informações no banco de dados
            //Depois irá ser feita uma verificação com o connect_errno pra ver se tudo deu certo
            if(mysqli_connect_errno( mysqli_query($conexao,"DELETE from Andybf_noticias WHERE id = '$id';")))
                {
                    echo '<b>Erro! não foi possível localizar a noticia e deletá-la.</b>';
                } else {
                    
                    //Inicia a gravação de um arquivo php com o conteudo da noticia
                    $nome_do_arquivo = $slug;
                    //Deleta o arquivo
                    @unlink($nome_do_arquivo);
                    
                    echo "<section>
                            <h2>Deletar Notícia</h2>
                            <article id='corpo'>
                                <center>
                                <h3>A notícia foi deletada com sucesso!</h3>
                                <a id='btnnegativo' href='/admin/painel_de_controle.php'>Voltar ao painel de controle</a>
                                <a id='btnpositivo' href='/index.php'>Voltar a página inicial</a>
                                </center>
                                <br>
                            </article>
                        </section>";
                }
            
        ?>
    </body>
</html>
