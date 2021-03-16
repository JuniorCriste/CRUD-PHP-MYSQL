<?php
session_start();
include_once("conecta.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);

echo "Nome é: $nome <br>";
echo "Sobrenome é: $sobrenome <br>";
echo "Email é: $email <br>";
echo "Celular é: $celular <br>";





$ExisteEmail = "select email from tbt_crud where email = '{$email}'";

$resultEE = mysqli_query($conn, $ExisteEmail);

$rowEE = mysqli_num_rows($resultEE);

$result_usuario = "INSERT INTO tbt_crud (nome, sobrenome, email, celular) VALUES ('$nome', '$sobrenome', '$email', '$celular')";

/*$resultEE = mysqli_query($conn, $result_usuario);*/




if($rowEE == 0) {
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $_SESSION['recado'] = "<p style='color: green;'>Cadastrado! Agora Faça seu login...</p>";    
    header('Location: ../crud.php'); 

} else {
    $_SESSION['erroe'] = "<p style='color: red;'>Esse email já foi cadastrado! Use outro ou entre em contato com o suporte...</p>";    
    header('Location: add.php'); 

}



