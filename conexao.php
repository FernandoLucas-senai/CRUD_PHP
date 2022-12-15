<?php   

    $host = 'localhost';
    $user = 'root';
    $senha  = 'root';
    $db = 'crud';

    $con = mysqli_connect($host,$user,$senha,$db);

    if (mysqli_connect_errno()) {
        echo "Erro Conexão: " . mysqli_connect_error();
        exit();
    };

?>