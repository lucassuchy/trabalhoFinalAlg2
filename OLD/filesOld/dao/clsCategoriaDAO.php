<?php
    /**
     * Conexão para inserir no banco a categoria.
     * anteriormente eu tinha um metodo post, não inclui aqui.
     * Preciso confirmar com o professor isso.
     */
    

    Class daoCategoria {
        public static function inserir( $categoria){
            $sql = "INSERT INTO categorias(nome) VALUES ". " ( '".$categoria->getNome()."' ) ";
            Conecta::executa($sql);
        }
    
    }
    
?>