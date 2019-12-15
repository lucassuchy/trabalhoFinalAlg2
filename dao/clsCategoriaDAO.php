<?php
require_once 'clsConecta.php';

    Class daoCategoria {
        public static function inserir( $categoria){
            //função que insere no banco
            $sql = "INSERT INTO categorias(nome) VALUES ". " ( '".$categoria->getNome()."' ) ";
            Conecta::executa($sql);
        }
        
        public static function lista(){
            $sql = "SELECT * from categorias";
            Conecta::consulta($sql);
            $sql = "SELECT id, nome FROM categorias ORDER BY nome";
            $result = Conecta::consulta($sql);
            $lista = new ArrayObject();
            if( $result != NULL ){
            while( list($id, $nome) = mysqli_fetch_row($result) ){
                $categoria = new Categoria();
                $categoria->setId($id); 
                $categoria->setNome($nome);
                $lista->append($categoria);
            }
        }
        return $lista;
    }


}
?>