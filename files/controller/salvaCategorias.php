<?php
include_once '../model/clsCategoria.php';
include_once '../dao/clsCategoriaDAO.php';
include_once '../dao/clsConectar.php';

if( isset( $_REQUEST['inserir'] ) ){
    $categoria = new Categoria();
    $categoria->setNome( $_POST['txtNome']  );
    
    Categoria::inserir($categoria);
    
    //header("Location: ../categorias.php");
}

