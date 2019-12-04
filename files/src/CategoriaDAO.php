<?php
include_once 'classConecta.php';

    Class daoCategoria {
        public static function inserir( $categoria){
            $sql = "INSERT INTO categorias VALUES ". " ( '".$categoria->getNome()."' ) ";
            Conecta::executa($sql);
        }
    
    }
?>