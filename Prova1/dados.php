<!--trabalho feito por cauã cristian inocêncio e felipe antonio de oliveira silva -->
<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>loja</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://www.pngkey.com/png/full/608-6089500_hotel-costa-azul-county-beach-logo-hotel-costa.png" alt="">
        </div>
        <div class="redes sociais">
            <img src="" alt="">
        </div>
    </header>
    <nav>
        
        <a href="login.php">login</a>
        
    </nav>
    <?php

        echo("nome: " . $_SESSION['nome'] ."<br><br>");   
        echo("numero quarto: " . $_SESSION['numero_quarto'] ."<br><br>");
        echo("data entrada: " . $_SESSION['data_entrada'] ."<br><br>");
        echo("data saida: " . $_SESSION['data_saida'] ."<br><br>");
       
    ?>
   
</body>
</html>
