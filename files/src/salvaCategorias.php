<?php

include_once 'classConecta.php';



if( isset( $_REQUEST['inserir'] ) ){
    $categoria = new Categoria();
    $categoria->setNome( $_POST['txtNome'] );
    daoCategoria::inserir($categoria);
    header("Location: ../index.php");
}


