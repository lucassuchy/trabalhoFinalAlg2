<?php
include_once '../model/clsCategoria.php';
include_once '../dao/clsConecta.php';
include_once '../dao/clsCategoriaDAO.php';


if( isset( $_REQUEST['inserir'] ) ){
    $categoria = new Categoria();
    $categoria->setNome( $_POST['txtNome'] );
    daoCategoria::inserir($categoria);
    header("Location: ../index.php");
}


