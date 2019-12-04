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
        <form name="List" method="post" action="">
        <select>            
            <option>Selecione... </option>
            <?php while($lista = mysqli_fetch_array($sql)) { ?>
            <!-- O while do php aqui vai adicionando preenchendo o option value até que chegue no ultimo id -->
            <option value="'<?php echo $lista['id'] ?>'"><?php echo $lista['nome'] ?></option>
            <?php } ?>
        </select>
        </form>
    </body>
</html>