<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Estilo do bloco de informações */
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h4 {
            text-align: center;
            color: #0056b3;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
            color: #003366;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td img {
            width: 50px;
            height: auto;
            border-radius: 5px;
        }

        tr:nth-child(even) {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Lista de Usuários</h4>
        <p>Esta é a página que exibe nossa lista de cadastros. Aqui você pode conferir nossos usuários.</p>
        <table>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Imagem</th>
            </tr>
            <?php
            // Verifica se existem usuários na sessão
            if (!empty($_SESSION['usuarios'])) {
                foreach ($_SESSION['usuarios'] as $usuario) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($usuario['nome']) . '</td>';
                    echo '<td>' . htmlspecialchars($usuario['email']) . '</td>';
                    echo '<td><img src="uploads/' . htmlspecialchars($usuario['imagem']) . '" alt="Imagem do usuário"></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">Nenhum usuário cadastrado.</td></tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>