<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Notícias Online</title>
        <link rel="stylesheet" type="text/css" href="/CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="/CSS/botoes.css">
        <link rel="icon" href="/IMG/favicon.ico" />
    </head>
    
    <body>
        <?php
            //inclui a barra de links ao topo
            include_once '../../navegacao.php';
            
            //Inicia a sessão
            session_start();
            
            //recebe os valores usados para a conexao
            $host = $_SESSION["host"];
            $usuario = $_SESSION["usuario"];
            $senha = isset($_SESSION["senha"])? $_SESSION["senha"] : $senha = '';
            $basedados = $_SESSION["basedados"];
            
            //realiza a conexao com o banco de dados
            if(mysqli_connect_errno($conexao = mysqli_connect($host, $usuario, $senha, $basedados))){
                echo "Erro de conexao<br>";
            }
            
            //Recebe os valores do form html
            $titulo = $_POST["titulo"];
            $slug = $_POST["titulo"];
            $descricao = $_POST["descricao"];
            $conteudo = $_POST["conteudo"];
            $palavraschave = $_POST["palavraschave"];
            $data = date("Y/m/d");
            
            //Executa o comando MYSQL_QUERRY para gravar informações no banco de dados
            //Depois irá ser feita uma verificação com o connect_errno pra ver se tudo deu certo
            if(mysqli_connect_errno( mysqli_query($conexao,"insert into noticias (id, titulo, slug, descricao, conteudo, palavraschave, data) values (default, '$titulo', '$slug', '$descricao', '$conteudo', '$palavraschave', '$data');")))
                {
                    echo 'Erro!';
                } else {
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select id from noticias where titulo = '$titulo' limit 1; "));
                    echo "<section>
                            <h2>Adicionar Nova Notícia</h2>
                            <article id='corpo'>
                                <center>
                                <h3>A notícia foi criada com sucesso!</h3>
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