<!DOCTYPE html>
<!--
Criado por: Anderson Bucchianico
Data: 03/09/2018
-->
<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Notícias Online</title>
        <link rel="stylesheet" type="text/css" href="CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="CSS/botoes.css">
        <link rel="stylesheet" type="text/css" href="CSS/lista_de_noticias.css">
        <link rel="Shortcut icon" href="IMG/favicon.ico" />
    </head>
    
    <body>
        <?php include_once 'navegacao.php';?>
        <section>
            <h2>Destaques</h2>
            <article id="corpo">
                <?php
                //inicia a sessao
                session_start();
                   
                //Realiza a conexão com o banco de dados
                if(mysqli_connect_errno($conexao = mysqli_connect('127.0.0.1', 'root', "", 'banco_de_noticias'))){
                     echo "Erro de conexão!!<br>";
                }
                
                //Seleciona a base de dados a ser utilizada
                mysqli_select_db($conexao, 'banco_de_noticias');
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 1 or id = 2 or id = 3 or id = 4 or id = 5 or id = 6 or id = 7 or id = 8 or id = 9 or id = 10;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '<center><h3>Aviso: Não há nenhum registro gravado no banco de dados!</h3><br>Entre na administração para adicionar novas notícias.<br><br></center>';
                }
                
                //Era para ter uma estrutura while aqui, mas devido a restrições do projeto
                //ficou essa sequencia de comandos repetidos abaixo. Ao todo serão 10 repetições.
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 1;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 2;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 3;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 4;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 5;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 6;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 7;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 8;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 9;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                
                $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from noticias where id = 10;"));
                if($resultado[0] == "" || $resultado[0] == null){
                    echo '';
                }else{
                    echo "<a id='lista' href=''>".
                    "<b>$resultado[1]</b> <br> $resultado[3] <br> data: $resultado[6]</a>";
                }
                ?>
            </article>
        </section>
    </body>
</html>
