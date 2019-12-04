<?php
include_once '../model/clsCategoria.php';
include_once '../dao/clsCategoriaDAO.php';
include_once '../dao/clsConecta.php';

if( isset( $_REQUEST['inserir'] ) ){
    $categoria = new Categoria();
    $categoria->setNome( $_POST['txtNome']  );
    daoCategoria::inserir($categoria, 'mural');
    header("Location: ../index.php");
}


