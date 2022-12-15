<?php

include 'conexao.php';

$result = mysqli_query($con,"Select * from produto");
$row = mysqli_fetch_array($result);


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
    <title>Recados</title>
</head>
<style>
    body{
        background-image: url("https://images.unsplash.com/photo-1622737133809-d95047b9e673?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80");
        background-size: cover;
    }
    #tela{
        height: 100vh;
        width: 100vw;
        margin-bottom: 5rem;
        margin-top: 5rem;
        display: grid;
    }
    #produto{
        background-color: white;
        width: fit-content;
        margin: 0 auto;
        border: 1px solid green;
        border-radius: 10px;
        padding: 15px;
        max-width: 30%;
        -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
		-moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.77);
		box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.77);
    }
    .buttons {
        display: flex;
    }
    .bnt {
        border: none;
        border-radius: 10px;
        margin: 5px;
        color: white;
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
    .img {
        max-width: 80%;
        margin: 0 auto;
    }
    .sub-header {
        width: 100%;
        background-color: blue;
        color: white;
        display: flex;
        margin-bottom: 2rem;
    }
</style>
<script>
        function redirect_to_editable_page(){
            window.location.assign('editar.php')
        }
    </script>
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

     <div id='tela'>
    
<?php

            while ($linha = mysqli_fetch_assoc($result)) {

                echo " 
                        <div id='produto'>
                                
                                <p class='fs-4'><strong>Produto: $linha[nome]</strong></p>
                                <hr class='text-success'>
                                <p class='fs-5'><strong>Descrição:</strong> $linha[descricao]</p>
                                <p class='fs-5'><strong>Peso:</strong> $linha[peso]</p>
                                <p class='fs-5 text-dark'><strong>Imagem:</strong></p>
                                <img class='img' src=''data:image/jpeg;base64,' . base64_encode($linha[foto]) . ' />
                                <div class='buttons'>
                                <form action='editar.php' method='POST'>
                                    <input type='hidden' value='$linha[nome]' name='where' id='where'>
                                    <input type='submit' class='bnt btn btn-success'onclick='redirect_to_editable_page()' value='Editar'>
                                    <button class='bnt btn btn-danger'>Deletar</button> </form>
                                </div>
                            </div><br>";

            }
        ?>
        </div>

       <section>
        <div class="footer">
            <p>CadPlus: www.cadplus.com.br</p>
        </div>
       </section>
</body>

</html>