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
            $senha = $_POST["senha"];
            $host = $_SESSION["host"];
            $usuario = $_SESSION["usuario"];
            $basedados = $_SESSION["basedados"];
            
            //realiza a conexao com o banco de dados
            if(mysqli_connect_errno($conexao = @mysqli_connect($host, $usuario, $senha, $basedados))){
                echo "<b>Erro! Não foi possível se conectar com o banco de dados, verifique sua senha.</b><br>";
            }
            //Executa o comando MYSQL_QUERRY para gravar informações no banco de dados
            //Depois irá ser feita uma verificação com o connect_errno pra ver se tudo deu certo
            if(mysqli_connect_errno(@mysqli_query($conexao,"TRUNCATE table noticias;")))
                {
                    echo '<b>Erro! não foi possível deletar todas as notícias!</b>';
                } else {
                    
                    exec("del /q C:\\wamp64\\www\\noticias");/*
                    if(mysqli_connect_errno(@rmdir("../../noticias")));
                    {
                    echo '<b>Erro! não foi possível deletar a pasta de notícias,<br>talvez porque não exista ou o sistema deu acesso negado para o site.</b>';
                    }
                    */
                    @mkdir("../../noticias");
                    
                    echo "<section>
                            <h2>Deletar Todas as Notícias</h2>
                            <article id='corpo'>
                                <center>
                                <h3>Todas as notícias foram deletadas com sucesso!</h3>
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
