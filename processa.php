<?php
include("conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//$telefone = $_POST['telefone'];
$telefone = $_POST['telefone'] ?? null;
$email = $_POST['email'];
$curso = $_POST['curso'];
$outro = $_POST['outro'];

// Verificar se o e-mail já existe
$sql_check = "SELECT * FROM inscricoes WHERE email = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Redirecionar para página de erro de e-mail duplicado
    header('Location: erro_email.php');
    exit;
} else {
    $sql = "INSERT INTO inscricoes (nome, idade, telefone, email, curso, outro)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissss", $nome, $idade, $telefone, $email, $curso, $outro);

    if ($stmt->execute()) {
        // Salvar dados na sessão para exibir na página de sucesso
        session_start();
        $_SESSION['nome'] = $nome;
        $_SESSION['curso'] = $curso;
        $_SESSION['email'] = $email;
        
        // Redirecionar para página de sucesso
        header('Location: sucesso.php');
        exit;
    } else {
        echo "Erro: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>
