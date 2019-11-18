<?PHP 
// Conecta com o banco e lista em um menu todas as opções de categorias para inserir.
include "conecta.php";
$sql = mysqli_query($link, "SELECT * from categorias");
?>
<html>
    <body>
        <form name="List" method="post" action="">
        <select>            
            <option>Selecione... </option>
            <?php while($lista = mysqli_fetch_array($sql)) { ?>
            <!-- O while do php aqui vai adicionando preenchendo o option value até que chegue no ultimo id -->
            <option value="'<?php echo $lista['id'] ?>'"><?php echo $lista['nome'] ?></option>
            <?php } ?>
        </select>
    </body>
</html>
