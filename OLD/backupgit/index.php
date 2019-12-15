<?php
/**
 * Esses includes eu coloquei aqui para poder testar a conexão pelo xampp rapidinho.
 */
    require_once ('dao/clsConecta.php');
    require_once ('dao/clsCategoriaDAO.php');
    require_once ('model/clsCategoria.php');
    //Declarei aqui o novo do
    $novo = NULL;

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
        <!-- Aqui é o form que mostra as categorias cadastradas em cima, agora eu vou aumentar e inserir na tabela conteudo
        <label>Categoria</label>
        <form methodo="POST" name="List" action="controller/salvaConteudo.php?inserir"><br>  
            <select name="categoria">            
                <option>Selecione a Categoria </option>
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
                    <?php 
                    }
                    ?></select><br><br>
                    <label>Nome:</label>
                    <input type="text" name="txtNome" placeholder="Nome do Conteudo:"><br><br>
                    <label>Arquivo:</label>         
                    <input type="file" name="arquivo" /><br><br>

                    <?php
                    $checado = "";
                    if( $novo ){
                        $checado = " checked ";
                    }
                    ?>
                    <label>Arquivo novo?</label>
                    <input type="checkbox" name="novo" <?php echo $checado; ?> /> <br><br>   
                    <input type="submit" Value="Enviar">
        </form>-->
        <form action="controller/salvaConteudo.php?inserir" method="POST">
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

    </body>
</html>