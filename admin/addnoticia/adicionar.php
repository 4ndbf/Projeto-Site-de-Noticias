<html>
    <head>
        <meta charset="UTF-8">
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
            }else{
                echo "Conexao feita com sucesso!<br>";
            }
            
            //Recebe os valores do form html
            $titulo = $_POST["titulo"];
            $slug = "";
            $descricao = $_POST["descricao"];
            $conteudo = $_POST["conteudo"];
            $palavraschave = $_POST["palavraschave"];
            
            //Executa o comando MYSQL_QUERRY para gravar informações no banco de dados
            //Depois irá ser feita uma verificação com o connect_errno pra ver se tudo deu certo
            if(mysqli_connect_errno( mysqli_query($conexao,"insert into noticias (id, titulo, slug, descricao, conteudo, palavraschave) values (default, '$titulo', '$slug', '$descricao', '$conteudo', '$palavraschave');")))
                {
                    echo 'Erro!';
                } else {
                    echo "Gravação feita com sucesso!<br>";
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select id from noticias where titulo = '$titulo' limit 1; "));
                    echo "O código da notícia é: $resultado[0]";
                }
            
        ?>
    </body>
</html>