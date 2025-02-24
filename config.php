<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $bdname="banco1";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bdname) or die ('Erro de conexão com o banco de dados');
?>