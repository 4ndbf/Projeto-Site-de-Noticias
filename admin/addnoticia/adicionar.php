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
                echo "<b>Erro de conexao com o banco de dados!</b><br>";
            }
            
            //Recebe os valores do form html
            $titulo = $_POST["titulo"];
            $slug = "../../noticias/";
            $slug = $slug . $_POST["titulo"];
            $descricao = $_POST["descricao"];
            $conteudo = $_POST["conteudo"];
            $palavraschave = $_POST["palavraschave"];
            $imagem = $_POST['imagem'];
            $data = date("Y/m/d");
            
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
            if(mysqli_connect_errno( mysqli_query($conexao,"insert into Andybf_noticias (id, titulo, slug, descricao, conteudo, palavraschave, data, imagem) values (default, '$titulo', '$slug', '$descricao', '$conteudo', '$palavraschave', '$data', '$imagem');")))
            {
                echo '<h3>Erro! Não foi possível adicionar uma nova notícia ao banco de dados!</h3>';
            } else {
                //prepara a página de modelo para ser gravada em um arquivo
                $_SESSION['titulo'] = $titulo;
                include ('../modelo_de_noticia.php');
                @$conteudo_da_pagina = gerar_modelo($conteudo_da_pagina);            
                //Inicia a gravação de um arquivo php com o conteudo da noticia
                $nome_do_arquivo = $slug;
		//var_dump($conteudo_da_pagina);
                //Cria o arquivo
                $adicionador = fopen($nome_do_arquivo, 'w') or die ("Erro! Não foi possível criar arquivo da notícia, verifique as permissões de acesso do sistema!" . $nome_do_arquivo);
                //Grava o conteudo
                fwrite($adicionador, $conteudo_da_pagina);
                //Termina a gravação
                fclose($adicionador);
                
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
