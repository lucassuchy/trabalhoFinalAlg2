<?php
//Formulario para inserir na tabela de conteudo.
include "conecta.php";


$nome = $_POST['nome'];
$caminho = $_POST['caminho'];
$novo= 0;
if( isset($_POST["novo"]) ){
    $novo = 1;
};
$cod_categoria = $_POST['categoria'];


mysqli_query($link, "INSERT INTO conteudo(nome, caminho, novo, cod_categoria) VALUES ('$nome','$caminho', $novo, $cod_categoria)");
header('location:form_insert_conteudo.php');
?>