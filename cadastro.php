<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de Alunos</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: "Handjet", serif;
    }
    :root {
        --body: rgb(148, 147, 203);
        --h2-background: rgb(103, 74, 176);
        --form-background: rgb(111, 111, 161);
        --input-color:  #1f143f;
        --input-background-focus: rgb(166, 244, 189);
        --submit-background: rgb(68, 33, 102);
        --submit-hover; rgb(246, 186, 138);
        --laranja-claro: rgb(244, 214, 181);
    }
    body {
        background-color: rgb(148, 147, 203);
        text-align: center;
        color: white;
        font-size: 5em;
        padding: 4em 0;
        color: rgb(244, 214, 181);
        font-weight: 600;
    }
    </style>
<body>
    
<?php
include('config.php');

$nome_aluno = $_POST['nome_aluno'];
$curso_aluno = $_POST['curso_aluno'];

$in = mysqli_query($conexao, "INSERT INTO aluno(nome_aluno, curso_aluno)
Values ('$nome_aluno', '$curso_aluno')") or die("Erro");

if($in) {
    echo 'Cadrastro efetuado com sucesso';
}
?>
</body>
</html>