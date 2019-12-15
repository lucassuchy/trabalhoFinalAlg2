<?php
require_once '../model/clsConteudo.php';
require_once '../dao/clsConecta.php';
require_once '../dao/clsConteudoDAO.php';


if( isset( $_REQUEST['inserir'] ) ){
    $conteudo = new Conteudo();
    $conteudo->setNome        ($_POST['nome'] );  
    $conteudo->setArquivo     ($_POST['arquivo']);
    $conteudo->setcodCategoria($_POST['categoria']);
        if( isset( $_POST['novo']) ){
        $conteudo->setNovo( '1' );
        } else {
        $conteudo->setNovo( '0' );
        }

    daoConteudo::inserir($conteudo);
    header("Location: ../index.php");
}

function salvarArquivo(){
    $nome_arquivo = "";
    if( isset( $_FILES['arquivo']['name']) && 
            $_FILES['arquivo']['name'] != "" ){
        $nome_arquivo = date('YmdHis').
              basename( $_FILES['arquivo']['name'] );
        $diretorio = "../arquivos/";
        $caminho = $diretorio.$nome_arquivo;
        if( ! move_uploaded_file( $_FILES['arquivo']['tmp_name'] ,
                $caminho ) ){
            $nome_arquivo = "sem_arquivos.pdf";
        }
        
    } else {
        $nome_arquivo = "sem_arquivos.pdf";
    }
    return $nome_arquivo;
}


