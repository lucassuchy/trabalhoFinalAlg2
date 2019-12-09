<?php

class Conteudo {
    private $id;
    private $nome;
    private $caminho;
    private $novo;
    private $codCategoria;

    
    public function __construct($id = NULL, $nome = NULL, $arquivo = NULL, $novo = NULL, $codCategoria = NULL){
        $this->id = $id; // String ok
        $this->nome = $nome; // String ok
        $this->arquivo = $arquivo; // OK a principio
        $this->novo = $novo; // int 
        $this->codCategoria = $codCategoria; //Int referencia de outra tabela
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getArquivo(){
        return $this->arquivo;
    }
    public function setArquivo($arquivo){
        $this->arquivo = $arquivo;
    }
    
    public function setcodCategoria($codCategoria){
        $this->codCategoria = $codCategoria;
    }

    public function setNovo($novo){
        $this->novo = $novo;
    }
    public function getNovo(){
        return $this-> novo;
    }


}