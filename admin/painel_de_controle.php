<!DOCTYPE php>
<!--
Criado por: Anderson Bucchianico
Data: 03/09/2018
-->
    <body>
        <?php include_once '../navegacao.php'; ?>
        
        <section>
            <h2>Painel de Controle</h2>
            <article id="corpo">
                <h3>Bem-vindo <?php echo "$usuario" ?>!</h3>
                <a id="botao" href="addnoticia/formulario_add.php">
                    <img src="/IMG/adicionar.png" width="128">
                    Adicionar Notícia
                </a>
                <a id="botao" href="editarnoticia/formulario_edit.php">
                    <img src="/IMG/editar.png" width="128">
                    Editar Notícia
                </a>
                <a id="botao" href="deletarnoticia/formulario_del.php">
                    <img src="/IMG/deletar.png" width="128">
                    Deletar Notícia
                </a>
            </article>
        </section>
