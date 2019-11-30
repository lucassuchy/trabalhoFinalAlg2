<?php

class Crud 
{
    public function select($tabela, $where=null)
    {
        $conexao = new Conexao();

        try {
            $query = "select * from $tabela";

            if(isset($where))
            {
                $query .= " where ";
                foreach($where as $key => $value)
                {
                    $query .= $key . " = " . $value; 
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function insert($tabela, $dados)
    {
        $conexao = new Conexao();
        try {
            $query = "select * from $tabela";

            if(!empty($dados)){
                $query .= " where ";
                foreach($dados as $key => $value)
                {
                    $query .= $key . " = " . $value; 
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        } 
    }
}