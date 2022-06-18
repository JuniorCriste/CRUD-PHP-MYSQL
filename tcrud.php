<?php
session_start();
include("src/conecta.php");

$buscarcad = "SELECT * FROM tbt_crud";
$querycad = msqli_query($conn, $buscarcad);

    while($recebercad = mysqli_fetch_array($querycad))
    {
        $id = $recebercad['id'];
        $nome = $recebercad['nome'];
        $sobrenome = $recebercad['sobrenome'];
        $email = $recebercad['email'];
        $celular = $recebercad['celular'];

        echo 'olá \n $nome' ;
    }
    ?>

<html>
<head>
<title>tCRUD</title>
</head>
<body>

<br />
TESTE
</body>
</html>
