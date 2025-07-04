<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <title>Dashboard</title>
</head>
<body>
<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!--<h1>Bem-vindo, <?php //echo $_SESSION['usuario']; ?>!</h1>-->

    <header>
        <nav id="navbar">
            <i class="fa-solid fa-burger" id="nav_logo">Doli</i>

            <ul id="nav_list">
                <li>
                    <a href="#home">Início</a>
                </li>
                <li>
                    <a href="#menu">Cardápio</a>
                </li>
                <li>
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>
            <button id="mobiles_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li>
                    <a href="#home">Início</a>
                </li>
                <li>
                    <a href="#menu">Cardápio</a>
                </li>
                <li>
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>
        </div>
    </header>

        <a href="logout.php">Sair</a>
</body>
</html>