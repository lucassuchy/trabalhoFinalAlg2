<?php

require_once "../dao/class.Conecta.php";

$conexao = New Conexao();

// var_dump($conexao);

$nome = "Bruno";

try {
    $consulta = $conexao->prepare("insert into categorias (nome) values (:nome)"); 
    $consulta->bindParam(":nome", $nome, PDO::PARAM_STR);
    $consulta->execute();

    // $resultado = $consulta->fetchAll();

} catch (Exception $e) {
    //throw $th;
    echo $e->getMessage();
}

/*

foreach($resultado as $teste)
{
    echo $teste["id"].$teste["nome"]."<br>";
}
*/