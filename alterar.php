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
    }
    body {
        background-color: rgb(148, 147, 203);
        text-align: center;
        color: white;
        font-size: 2em;
        padding: 2em 0;
    }
    h2 {
        background: rgb(103, 74, 176);
        height: 36vh;
        font-size: 60px;
        padding: 2em 0em;
        margin-block: -99px;
    }
    a {
        color: white;
        font-size: 35px;
    }
    form {
        text-align: justify;
        margin: 3em 22em;
        background: rgb(111, 111, 161);
        border-radius: 5px;
        padding: 10px;
        font-size: 21px;
    }
    input[type="text"], 
    input[type="submit"] {
        width: 100%;
        padding: 8px;
        margin: 9px 0;
        border: none;
        outline: none;
        font-size: 20px;
        color: #1f143f;
    }
    input[type="text"]:focus {
        background: rgb(166, 244, 189);
    }
    input[type="submit"] {
        background: rgb(68, 33, 102);
        color: white;
        font-weight: 600;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background: rgb(246, 186, 138);
        transition: .3s;
    }
</style>
<body>

<?php
include('config.php');

$id_aluno=$_GET['id_aluno'];

$sql = mysqli_query($conexao, "SELECT * FROM aluno where id_aluno='$id_aluno'") or die("Erro");
$linhas = mysqli_num_rows($sql);

while($dados=mysqli_fetch_assoc($sql)) {
    echo $dados['id_aluno']. ' - ' .$dados['nome_aluno']. ' -> ' .$dados['curso_aluno'].'<br>';
    ?>

    <h2>Alterar Aluno</h2>
    <br><br>
    <form action="atualizar.php?id_aluno=<?php echo($dados['id_aluno']); ?>" method="post">
        Nome: <br>
        <input type="text"name="nome_aluno" id="nome_aluno" value="<?php echo($dados['nome_aluno']); ?>"><br>
        Curso: <br>
        <input type="text"name="curso_aluno" id="curso_aluno" value="<?php echo($dados['curso_aluno']); ?>"><br><br>
        <input type="submit" value="Atualizar">
    </form>
    <?php
}
?>
</body>
</html>