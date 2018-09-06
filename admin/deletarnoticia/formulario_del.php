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
            include_once '../../navegacao.php';
        ?>
        <section>
            <h2>Deletar Notícia</h2>
            <article id="corpo">
                <form action="deletar.php" id="noticiaform" method="POST">
                    <label for="titulo">Identificador (ID) da Notícia</label>
                    <br>
                    <input type="text" name="identificador" maxlength="92" id="inputnoticia" required>
                    <br>
                    <label for="titulo">Senha da Base de Dados</label>
                    <br>
                    <input type="text" name="senha" maxlength="92" id="inputnoticia">
                    <br>
                    <center>
                        <input type="submit" name="enviarnoticia" value="Deletar Notícia" id="btnnegativo">
                    </center>
                </form>
            </article>
        </section>
    </body>
</html>