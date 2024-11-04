<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    
    // Verifica se um arquivo foi enviado
    $imagemNome = null;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagemNome = $_FILES['imagem']['name'];// Salva a imagem na sessão
        move_uploaded_file($_FILES['imagem']['tmp_name'], 'uploads/' . $imagemNome);// Move a imagem para o diretório desejado
    }

    // Armazena os dados na sessão
    if (!isset($_SESSION['usuarios'])) {
        $_SESSION['usuarios'] = []; // Inicializa o array se não existir
    }
    
    $_SESSION['usuarios'][] = [
        'nome' => $nome,
        'email' => $email,
        'imagem' => $imagemNome
    ];
    header('Location: listar.php');
    exit;
}

echo "Erro: Formulário não enviado corretamente.";
?>
