<!DOCTYPE html>
<!--
Criado por: Anderson Bucchianico
Data: 03/09/2018
-->
<html>
    <head>
        <title>Noticias Online - Painel de Controle</title>
        <meta charset="utf8_general_ci">
        <link rel="stylesheet" type="text/css" href="CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="CSS/botoes.css">
        <link rel="icon" href="IMG/favicon.ico" />
        <style>
            img{
                margin: 0px;
            }
        </style>
    </head>
    
    <body>
        <?php include_once 'navegacao.php';?>
        <section>
            <h2>Administação</h2>
            <form id="corpo" action="admin/conexao.php" method="POST">
                <h3>Entre com sua conta de Administrador</h3>
                <table>
                    <tr>
                        <td><label for="usuario">Nome de Usuário</label></td>
                        <td><input type="text" name="usuario" id="usuario" maxlength="32"></td>
                        <td rowspan="2"><img src="IMG/Engrenagens.png" width="100px"></td>
                    </tr>
                    <tr>
                        <td><label for="senha">Senha</label></td>
                        <td><input type="password" name="senha" id="senha" maxlength="32"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" name="botao" value="Entrar" id="btnpositivo">
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </body>
</html>