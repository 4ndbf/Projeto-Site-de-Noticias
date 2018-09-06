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
            include_once '../navegacao.php';
        ?>
        <section>
            <h2>Editar Notícia</h2>
            <article id="corpo">
                <form action="" id="noticiaform" method="POST">
                    <label for="titulo">Título da Notícia</label>
                    <br>
                    <input type="text" name="titulo" maxlength="92" id="inputnoticia" required>
                    <br>
                    <label for="titulo">Descrição</label>
                    <br>
                    <input type="text" name="descricao" maxlength="92" id="inputnoticia" required>
                    <br>
                    <label for="titulo">Conteúdo</label></td>
                    <br>
                    <textarea name="conteudo" maxlength="4096" form="noticiaform" rows="19" required></textarea>
                    <br>
                    <label for="titulo">Palavras-Chave</label>
                    <br>
                    <input type="text" name="palavraschave" id="inputnoticia" required>
                    <br>
                    <center>
                        <input type="submit" name="enviarnoticia" value="Editar Notícia" id="btnpositivo">
                    </center>
                </form>
            </article>
        </section>
    </body>
</html>