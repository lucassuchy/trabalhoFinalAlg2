<?php
    /**
     * Conexão para inserir no banco a categoria.
     * anteriormente eu tinha um metodo post, não inclui aqui.
     * Preciso confirmar com o professor isso.
     */
    require_once '../config.php';


    Class daoCategoria extends crud{
        public static function inserir( $categoria){
            $sql = "INSERT INTO categorias(nome) VALUES ". " ( '".$categoria->getNome()."' ) ";
            Conecta::executa($sql);
        }
    
    }
?>