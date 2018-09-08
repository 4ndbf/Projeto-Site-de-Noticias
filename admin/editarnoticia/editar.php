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
            $senha = isset($_SESSION["senha"])? $_SESSION["senha"] : $senha = '';
            $host = $_SESSION["host"];
            $usuario = $_SESSION["usuario"];
            $basedados = $_SESSION["basedados"];
            
            //o titulo antigo é usado para apagar a noticia
            $id = $_GET["id"];
            $titulo_antigo = $_GET["slug"];
            
            //realiza a conexao com o banco de dados
            if(mysqli_connect_errno($conexao = mysqli_connect($host, $usuario, $senha, $basedados))){
                echo "<b>Erro de conexao com o banco de dados!</b>";
            }
            
            //Recebe os valores do form html
            $titulo = $_POST["titulo"];
            $slug = "../../noticias/";
            $slug = $slug . $titulo;
            $descricao = $_POST["descricao"];
            $conteudo = $_POST["conteudo"];
            $palavraschave = $_POST["palavraschave"];
            $imagem = $_POST['imagem'];
            
             //tratamento da variavel palavraschave
            $palavraschave = strtolower($palavraschave);
            
            //Tratamento da variavel slug
            $slug = strtolower($slug);
            $slug = $slug . ".php";
            $slug = str_ireplace("?", "", $slug);
            $slug = str_ireplace("!", "", $slug);
            $slug = str_ireplace(":", "", $slug);
            $slug = str_ireplace(" ", "-", $slug);
            $slug = str_ireplace("ç", "c", $slug);
            $slug = str_ireplace("ã", "a", $slug);
            $slug = str_ireplace("á", "a", $slug);
            $slug = str_ireplace("é", "e", $slug);
            $slug = str_ireplace("ê", "e", $slug);
            $slug = str_ireplace("í", "i", $slug);
            $slug = str_ireplace("õ", "o", $slug);
            $slug = str_ireplace("ó", "o", $slug);
            $slug = str_ireplace("ú", "u", $slug);
            
            //Executa o comando MYSQL_QUERRY para gravar informações no banco de dados
            //Depois irá ser feita uma verificação com o connect_errno pra ver se tudo deu certo
            
             if(mysqli_connect_errno( mysqli_query($conexao,"update noticias set titulo = '$titulo', slug = '$slug', descricao = '$descricao', conteudo = '$conteudo', palavraschave = '$palavraschave', imagem = '$imagem' where id = $id;")))
                {
                    echo '<b>Erro! não foi possível localizar a noticia e editá-la.</b>';
                } else {
                    
                    //prepara a página de modelo para ser gravada em um arquivo
                    $_SESSION['titulo'] = $titulo;
                    include ('../modelo_de_noticia.php');
                    @$conteudo_da_pagina = gerar_modelo($conteudo_da_pagina);
                    
                    //Deleta o arquivo com o titulo antigo caso houver
                    $nome_do_arquivo = $titulo_antigo;
                    @unlink($nome_do_arquivo);
                    
                    //Inicia a gravação de um arquivo php com o conteudo da noticia
                    //Cria o arquivo
                    $nome_do_arquivo = $slug;
                    $adicionador = fopen($nome_do_arquivo, 'w') or die('Erro! Não foi possível criar arquivo da notícia<br> ' . $nome_do_arquivo);
                    //Grava o conteudo
                    fwrite($adicionador, $conteudo_da_pagina);
                    //Termina a gravação
                    fclose($adicionador);
                    
                    echo "<section>
                            <h2>Editar Notícia</h2>
                            <article id='corpo'>
                                <center>
                                <h3>A notícia selecionada foi alterada com sucesso!</h3>
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