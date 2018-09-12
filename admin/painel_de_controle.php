<!DOCTYPE php>
<!--
Criado por: Anderson Bucchianico
Data: 03/09/2018
-->
<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Notícias Online - Painel de Controle</title>
        <link rel="stylesheet" type="text/css" href="/CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="/CSS/botoes.css">
        <link rel="icon" href="/IMG/favicon.ico" />
    </head>
    
    <body>
    <?php include_once '../navegacao.php'; ?>
    <section>
        <h2>Painel de Controle</h2>
        <article id="corpo">
            <h3>Bem-vindo
                <?php session_start();
                echo $_SESSION["usuario"];
                ?>!
            </h3>
            <a id="botao" href="addnoticia/formulario_add.php">
                <img src="/IMG/adicionar.png" width="128">
                Adicionar Notícia
            </a>
            <a id="botao" href="editarnoticia/lista_edit.php">
                <img src="/IMG/editar.png" width="128">
                 Editar Notícia
            </a>
            <a id="botao" href="deletarnoticia/lista_del.php">
                <img src="../IMG/deletar.png" width="128">
                Deletar Notícia
            </a>
        </article>
    </section>
</html>