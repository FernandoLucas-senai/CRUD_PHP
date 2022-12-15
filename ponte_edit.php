<?php

include 'conexao.php';

$nome = $_POST['nomeE'];
$desc = $_POST['descE'];
$peso = $_POST['pesoE'];
$onde = $_POST['onde'];


$sql  = "update produto set nome = $nome, descricao = $desc, peso = $peso where nome = $onde";
#$sql = "delete from produto";

if(!mysqli_query($con,$sql)){
    echo "Erro ao Salvar ".mysqli_error($con);
    mysqli_close($con);
}

$result = mysqli_query($con,"Select * from produto where nome = $nome");


if(!$result){
    echo mysqli_error($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Produtos Cadastrados</title>
</head>
<body>

</body>
</html>