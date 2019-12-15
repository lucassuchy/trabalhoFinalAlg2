<?php
require_once '../model/clsCategoria.php';
require_once '../dao/clsConecta.php';
require_once '../dao/clsCategoriaDAO.php';


if( isset( $_REQUEST['inserir'] ) ){
    $categoria = new Categoria();
    $categoria->setNome( $_POST['txtNome'] );
    daoCategoria::inserir($categoria);
    header("Location: ../index.php");
}


