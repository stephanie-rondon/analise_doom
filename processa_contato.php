<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "doli";

// Conexão com o banco
$conn = new mysqli($host, $user, $password, $database);

// Verifica se a conexão deu erro
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';
    $data_envio = date("Y-m-d H:i:s");

    // Comando SQL com prepared statement
    $sql = "INSERT INTO contatos (nome, email, mensagem, data_envio) 
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $email, $mensagem, $data_envio);

    if ($stmt->execute()) {
        // Redireciona de volta para a home com parâmetro de sucesso
        header("Location: home.php?status=sucesso");
        exit();
    } else {
        echo "<p style='color: red'>Erro ao enviar mensagem.</p>";
    }

    $conn->close();
} else {
    echo "<p style='color: red'>Acesso inválido.</p>";
}
?>
</body>
</html>