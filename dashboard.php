<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    <title>Dashboard</title>
</head>
<body>
<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "doli");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>


<!--<h1>Bem-vindo, <?php //echo $_SESSION['usuario']; ?>!</h1>-->

    <header>
        <nav id="navbar">
            <i class="fa-solid fa-burger" id="nav_logo">Doli</i>

            <ul id="nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>
        </div>
    </header>

    <section id="contatos">
        <h2 class="section-title">Contatos Recebidos</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Mensagem</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT nome, email, mensagem, data_envio FROM contatos ORDER BY data_envio DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0):
                while($row = $result->fetch_assoc()):
            ?>
                <tr>
                    <td><?= htmlspecialchars($row['nome']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= nl2br(htmlspecialchars($row['mensagem'])) ?></td>
                    <td><?= date("d/m/Y H:i", strtotime($row['data_envio'])) ?></td>
                </tr>
            <?php
                endwhile;
            else:
            ?>
                <tr><td colspan="4">Nenhum contato recebido ainda.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    </section>


    <a href="index.php" class="btn-logout">Sair</a>

    <script src="script.js"></script>
</body>
</html>