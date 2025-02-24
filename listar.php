<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    }
    body {
        background-color: rgb(148, 147, 203);
        text-align: center;
        color: white;
        padding: 3em;
        font-size: 2em;
    }
    a {
        color: white;
        font-size: 35px;
    }
    a:hover {
        color: rgb(98 255 145);
        background: rgb(111, 111, 161);
        padding: 4px 4px;
        border-radius: 5px;
        transition: .3s;
    }
    .bi-arrow-repeat, .bi-trash3 {
        font-family: "Handjet", serif;
        font-size: 28px;
    }
</style>
<body>
    
<?php
include('config.php');

$sql = mysqli_query($conexao, "SELECT * FROM aluno") or die("Erro");
$linhas = mysqli_num_rows($sql);
echo "Foram encontrados $linhas registros";
echo '<br><br>';

while($dados=mysqli_fetch_assoc($sql)) {
    ?>
    <a href="alterar.php?id_aluno=<?php echo($dados['id_aluno']); ?>">[<i class="bi bi-arrow-repeat"></i>Alterar]</a>
    <a href="excluir.php?id_aluno=<?php echo($dados['id_aluno']); ?>">[<i class="bi bi-trash3"></i>Excluir]</a>

    <?php

    echo $dados['id_aluno']. ' - ' .$dados['nome_aluno']. ' -> ' .$dados['curso_aluno'].'<br>';
}
?>
</body>
</html>