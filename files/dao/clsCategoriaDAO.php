<?php
    /**
     * Conexão para inserir no banco a categoria.
     * anteriormente eu tinha um metodo post, não inclui aqui.
     * Preciso confirmar com o professor isso.
     */
    require_once "clsConecta.php";
    require_once "model/clsCategoria.php";

    Class daoCategoria extends Categoria 
    {
        public static function inserir( $categoria)
        {
            $sql = "INSERT INTO categorias(nome) VALUES('$nome')";
            Conecta::executa($sql);
        }
    
    }
?>