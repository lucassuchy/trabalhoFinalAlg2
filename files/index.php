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
    
        <input type="text" name="nome_categoria" placeholder="Nome da Categoria">
        <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>