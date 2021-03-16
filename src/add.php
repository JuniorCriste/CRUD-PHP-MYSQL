<?php	
session_start();	
?>

<DOCTYPE html>
<html lang="pt-br">
<head>
<title>CRUD - Adicionar</title>
<link href="../src/styles/crud.css" rel="stylesheet">
<meta charset="UTF-8">
<meta content='width=device-width, minimum-scale=1.0, maximum-scale=1.0' name='viewport'/>
<link rel="icon" type="image/png" href="https://informaticode.store/mais/crud/img/icon.png"/>

</head>
<body>
<div id="top">
    <img src="../img/structure/top.png">
    </div>

<div id="main">
<form method="POST" action="addcad.php">
<div id="formx">
    
    <div id="campos">
    <div class="campo">
    Nome<br />
    <input type="text" name="nome" placeholder="Primeiro nome" required="required">
    </div>
    
    <div class="campo">
    Sobrenome<br />
    <input type="text" name="sobrenome" placeholder="O restante" required="required">
    </div>
    
    <div class="campo">
    E-mail<br />
    <input type="email" name="email" placeholder="seuemail@mail.com" required="required">
    </div>
    
    <div class="campo">
    Celular<br />
    <input type="tel" name="celular" placeholder="DDD+número" required="required" pattern="[0-9]{null}">
    </div>    
    
    <br />
    <input type="reset" value="Limpar">
    <input type="submit" value="     Cadastrar     "> 

    </div>
    
 </div>

</form>

</div>

<div id="bottom">
    <a href="https://www.instagram.com/informaticode/" target="_blank"><img src="../img/structure/inst.png"></a>
    <a href="mailto:informaticode@gmail.com" target="_blank"><img src="../img/structure/mail.png"></a>
    <a href="https://api.whatsapp.com/send?phone=5527988334621" target="_blank"><img src="../img/structure/whtpp.png"></a>
    <a href="https://github.com/JuniorCriste/CRUD-PHP-MYSQL" target="_blank"><img src="../img/structure/git.png"></a>
    </div>




</body>
</html>
