<?php
require_once 'clsConecta.php';


Class daoConteudo {
    public static function inserir( $conteudo){
        //função que insere no banco
        $sql = "INSERT INTO conteudo(nome, caminho, novo, cod_categoria) VALUES "
                . " ( '".$conteudo->getNome().  "' , "
                . "  '".$conteudo->getArquivo()."' , "
                . "  '".$conteudo->getNovo().   "' , "
                . "  '".$conteudo->getCodCategoria()
                . "  ); ";
        Conecta::executa($sql);
    }
}

?>
