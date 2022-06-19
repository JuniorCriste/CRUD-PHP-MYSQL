<?php
//session_start();
include '/database/conecta.php';
$buscar_cadastros = "SELECT * FROM crud";
$query_cadastros = mysqli_query($conn, $buscar_cadastros);
?>

<DOCTYPE html>
<html lang="pt-br">
<head>
<title>CRUD em PHP e MySQL</title>
<link href="src/styles/crud.css" rel="stylesheet">
<meta charset="UTF-8">
<meta content='width=device-width, minimum-scale=1.0, maximum-scale=1.0' name='viewport'/>
<link rel="icon" type="image/png" href="https://informaticode.store/mais/crud/img/icon.png"/>

</head>
<body>
<div id="top">
    <img src="img/structure/top.png">
    </div>

<div id="main">
<div id="table">
    <img src="img/structure/basetb.png">
<br/>    
   <?php
    while($cadastros = mysqli_fetch_array($query_cadastros))
    {
        $id = $cadastros['id'];
        $nome = $cadastros['nome'];
        $sobrenome = $cadastros['sobrenome'];
        $email = $cadastros['email'];
        $celular = $cadastros['celular'];
    ?>

    <tr>
        <td scope="row"> <?php echo $id; ?> </td>
        <td> <?php echo $nome; ?> </td>
        <td> <?php echo $sobrenome; ?> </td>
        <td> <?php echo $email; ?> </td>
        <td> <?php echo $celular; ?> </td>
    </tr>



</div>


<div id="buttons">
    <a href="src/add.php"><img src="img/structure/bntadd.png"> </a> <br /> <br />
    <img src="img/structure/bntsec.png"> <br /> <br />
    <img src="img/structure/bntmod.png"> <br /> <br />
    <img src="img/structure/bntdel.png"> 
    </div>
</div>

<div id="bottom">
    <a href="https://www.instagram.com/informaticode/" target="_blank"><img src="img/structure/inst.png"></a>
    <a href="mailto:informaticode@gmail.com" target="_blank"><img src="img/structure/mail.png"></a>
    <a href="https://api.whatsapp.com/send?phone=5527988334621" target="_blank"><img src="img/structure/whtpp.png"></a>
    <a href="https://github.com/JuniorCriste/CRUD-PHP-MYSQL" target="_blank"><img src="img/structure/git.png"></a>
    </div>




</body>
</html>
