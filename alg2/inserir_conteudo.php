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
//if($novo == "novo"){
 //   $novo == 1;
//} else {
 //   $novo == 0;
//}


// echo $novo;
// echo $cod_categoria;
// com o header o html não funciona
echo " <hr>INSERT INTO conteudo(nome, caminho, novo, cod_categoria) VALUES ('$nome','$caminho', $novo, $cod_categoria)";

mysqli_query($link, "INSERT INTO conteudo(nome, caminho, novo, cod_categoria) VALUES ('$nome','$caminho', $novo, $cod_categoria)");
header('location:form_insert_conteudo.php');
?>