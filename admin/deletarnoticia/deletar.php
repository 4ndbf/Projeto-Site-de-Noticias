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
            
            //Recebe os valores do form html
            $identificador = $_POST["identificador"];
            $senha = $_POST["senha"];
            
            //recebe os valores usados para a conexao
            $host = $_SESSION["host"];
            $usuario = $_SESSION["usuario"];
            $basedados = $_SESSION["basedados"];
            
            //realiza a conexao com o banco de dados
            if(mysqli_connect_errno($conexao = mysqli_connect($host, $usuario, $senha, $basedados))){
                echo "Erro de conexao<br>";
            }else{
                echo "Conexao feita com sucesso!<br>";
            }
            
            //informa o codigo da noticia digitado
            $resultado = mysqli_fetch_array(mysqli_query($conexao, "select id from noticias where id = '$identificador' limit 1; "));
                    echo "O código da notícia fornecida é: $resultado[0]";
            
            //Executa o comando MYSQL_QUERRY para gravar informações no banco de dados
            //Depois irá ser feita uma verificação com o connect_errno pra ver se tudo deu certo
            if(mysqli_connect_errno( mysqli_query($conexao,"DELETE from noticias WHERE id = '$identificador';")))
                {
                    echo 'Erro! não foi possível localizar a noticia e deletá-la.';
                } else {
                    echo "Noticia deletada com sucesso!<br>";
                }
            
        ?>
    </body>
</html>