<?php
//Formulario para inserir na tabela de categorias.
include "conecta.php";


$nome = $_POST['nome_categoria'];

mysqli_query($link, "INSERT INTO categorias(nome) VALUES ('$nome')");
header('location:../index.php');
?>