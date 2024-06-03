<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        require 'modulos.php';
        include 'menu.html';
        session_start();
        if ($_SESSION['logado'] != true) {
            login_necessario();
        }
    ?>

    <div class="container">

        <h1>Seja bem vindo, <?php if (isset($_COOKIE['nome'])) { echo $_COOKIE['nome']; }?>!</h1>
        <p>Esse é um projeto proposto pelo professor Rodrigo, na matéria de DESENV. WEB EM HTML5, CSS, JAVASCRIPT E PHP, e executada por Guilherme
            Antonio.</p>

    </div>

</body>

</html>