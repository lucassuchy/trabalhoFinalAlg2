<?php
    /**
     * Conexão para inserir no banco a categoria.
     * anteriormente eu tinha um metodo post, não inclui aqui.
     * Preciso confirmar com o professor isso.
     */
    include "clsConecta.php";


    Class Categoria {
        public static function inserir( $categoria){
            $sql = "INSERT INTO categorias(nome) VALUES('$nome')";
            Conecta::executa($sql);
        }
    }
?>