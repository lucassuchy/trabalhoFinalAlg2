<?php
    require_once "config.php";
?>

<html>
<!-- A função de cadastrar funciona. -->
    <body>
    <h2> inserir categoria: <h2></br>
        <form method="POST" action="controller/salvaCategorias.php?inserir">
        <input type="text" name="txtNome" placeholder="Nome da Categoria">
        <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>