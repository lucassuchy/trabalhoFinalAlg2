<?php
//Formulario para inserir na tabela de conteudo.
include "conecta.php";


$nome = $_POST['nome'];
$caminho = $_POST['caminho'];
$novo = $_POST[1];
$cod_categoria = $_POST['categoria'];
//if($novo == "novo"){
 //   $novo == 1;
//} else {
 //   $novo == 0;
//}


 echo $novo;
 echo $cod_categoria;
mysqli_query($link, "INSERT INTO conteudo(nome, caminho, novo) VALUES ('$nome','$caminho', '$novo')");
header('location:form_insert_conteudo.php');
?>