<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Notícias Online - Editar Notícia</title>
        <link rel="stylesheet" type="text/css" href="/CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="/CSS/botoes.css">
        <link rel="icon" href="IMG/favicon.ico" />
    </head>
    
    <body>
        <?php
            include_once '../../navegacao.php';
            
            $id = $_GET['id'];
            $titulo = $_GET['titulo'];
            $slug = $_GET['slug'];
            $descricao = $_GET['descricao'];
            $imagem = $_GET['imagem'];
            $conteudo = $_GET['conteudo'];
            $palavraschave = $_GET['palavraschave'];
        ?>
        <section>
            <h2>Editar Notícia</h2>
            <article id="corpo">
                <p><i>Os campos com um asterisco (*) são obrigatórios</i></p>
                <form action="editar.php?id=<?php echo $id; ?>&slug=<?php echo $slug; ?>" id="noticiaform" method="POST">
                    <label for="titulo">Título da Notícia*</label>
                    <br>
                    <input type="text" name="titulo" maxlength="92" id="inputnoticia" value="<?php echo $titulo ?>" required placeholder="Escreva o título aqui. Tamanho máx.: 92 bytes">
                    <br>
                    <label for="titulo">Descrição*</label>
                    <br>
                    <input type="text" name="descricao" maxlength="192" id="inputnoticia" value="<?php echo $descricao ?>" required placeholder="Descrição breve sobre o assunto. Tamanho máx.: 192 bytes">
                    <br>
                    <label for="titulo">Imagem</label>
                    <br>
                    <input type="text" name="imagem" maxlength="256" id="inputnoticia" value="<?php echo $imagem ?>" placeholder="Coloque o link da imagem aqui. Tamanho recomendado: 600x300px">
                    <br>
                    <label for="titulo">Conteúdo*</label></td>
                    <br>
                    <textarea name="conteudo" maxlength="4096" form="noticiaform" rows="19" required placeholder="Todo o texto da notícia fica aqui, você pode também usar tags html para formatação de texto. Tamanho máx.: 64 Kbytes"><?php echo $conteudo ?></textarea>
                    <br>
                    <label for="titulo">Palavras-Chave*</label>
                    <br>
                    <input type="text" name="palavraschave" maxlength="128" id="inputnoticia" value="<?php echo $palavraschave ?>" required placeholder="palavras para identificar sua noticia nos buscadores, separe-as por vírgulas . Tamanho máx.: 128 bytes">
                    <br>
                    <center>
                        <input type="submit" name="enviarnoticia" value="Editar Notícia" id="btnpositivo">
                    </center>
                </form>
            </article>
        </section>
    </body>
</html>