<html>
<?PHP 
// Conecta com o banco e lista em um menu todas as opções de categorias para inserir.
include "conecta.php";
$sql = mysqli_query($link, "SELECT * from categorias");
?>
<html>
    
    <body>Selecione a Categoria: 
    <!-- Aqui ele começa a entender o formulario de envio -->
    <form action="inserir_conteudo.php" method="POST">
        <!-- Aqui é o segundo formulario de envio-->
       <!-- <form name="categoria" method="post" action=""> -->
        <select name="categoria">            
            <option>Selecione... </option>
            <?php while($lista = mysqli_fetch_array($sql)) { ?>
            <!-- O while do php aqui vai adicionando e preenchendo o option value até que chegue no ultimo id -->
            <option value="'<?php echo $lista['id'] ?>'"><?php echo $lista['nome'] ?></option>
            <?php } ?>
            <!-- Aqui termina que gera o o conteudo do select -->
        </select><br>
            <input type="text" name="nome" placeholder="Titulo">
            <input type="text" name="caminho" placeholder="Pasta">
            <input type="checkbox" name="novo" value="novo">Novo Documento<br>
            <input type="submit" value="Enviar">
    </form>      
    </body>
</html>
