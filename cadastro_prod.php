<?php


include 'conexao.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastro de produto</title>
</head>
<style>
    body{
        background-image: url("https://images.unsplash.com/photo-1622737133809-d95047b9e673?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80");
        background-size: cover;
    }
    #tela{
        height: 100vh;
        width: 100vw;
        display: grid;
        place-items: center;
    }
    #form{
        width: 50%;
        height: fit-content;
        padding: 15px;
        border: 1px solid gray;
        border-radius: 5px;
        background-color: aliceblue;
    }
    .sub-header {
        width: 100%;
        background-color: blue;
        color: white;
        display: flex;
        margin-bottom: 2rem;
    }
    .header {
        width: 100%;
        height: 4rem;
        display: grid;
        place-items: center;
        margin-bottom: 1rem;
        background-color: aliceblue;
    }
    .footer {
        width: 100%;
        height: 2rem;
        background-color: aliceblue;
        position: fixed;
        bottom: 0;
    }
</style>
<body>

    <section>
    <div class="header">
        <h1>CadProd</h1>
        <div class="sub-header">
            <h6 class="m-2" onclick="window.location.assign('index.php')">Home</h6>
            <h6 class="m-2" onclick="window.location.assign('cadastro_prod.php')">Cadastar produto</h6>  
        </div>
    </div>
    </section>

    <div id="tela">
        <div id="form">
            <p class="fs-3 text-center">Cadastre um produto:</p>
            <form action="ponte.php" method="POST">
                <label for="name">Nome:</label>
                <input type="text" id="nome" name="nome" class="w-100" required>

                <label for="email">Descrição:</label>
                <input type="text" name="desc" class="w-100" id="desc" required>

                <label for="endereco">Peso:</label>
                <input type="text" name="peso" class="w-100" id="peso" required>
                
                <label for="recado" class="mt-5">Foto:</label>
                <input name="img" id="img" type="file"></input>

                <input type="submit" class="btn btn-primary w-100 mt-5" value="Enviar">
            </form>
        </div>
    </div>

    <section>
        <div class="footer">
            <p>CadPlus: www.cadplus.com.br</p>
        </div>
       </section>
    
</body>
</html>
