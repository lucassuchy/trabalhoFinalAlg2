<?php
/**
 * Esses includes eu coloquei aqui para poder testar a conexão pelo xampp rapidinho.
 */
    require_once ('dao/clsConecta.php');
    require_once ('dao/clsCategoriaDAO.php');
    require_once ('model/clsCategoria.php');
    

?>

<html>
<!--Aqui vai ser a index do trabalho, vou testar transmitir 
uma categoria nova pro banco apartir daqui, se funcionar vou criar um formulario separado. -->
    <body>
        <form method="POST" action="controller/salvaCategorias.php?inserir">
        <input type="text" name="txtNome" placeholder="Nome da Categoria">
        <input type="submit" value="Cadastrar">
        </form>
        <br>
        <br>
        <form name="List" action="">
        <select>            
            <option>Selecione... </option>
        <?php
            $nome = "";           
            $idCategoria = 0;
            $lista = daoCategoria::lista();      
            foreach ($lista as $cat){
                $selecionar = "";
                if( $idCategoria == $cat->getId() ){
                    $selecionar = " selected ";
                }?>
                <option '.$selecionar.' value="'.$cat->getId().'"><?php echo $cat->getNome().'</option>' ?></option>
                <?php }
        ?>
        </form>

    </body>
</html>