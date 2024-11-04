<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0%
        }

        /* estilo do bloco de informações */
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h4 {
            text-align: center;
            color: #0056b3;
            margin-bottom: 20px;
        }
        label {
            display: block; /*o elemento ocupa toda a largura disponível e inicia em uma nova linha*/
            margin-bottom: 5px;
            color: #0056b3;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px; /* arredonda os cantos dos inputs */
            transition: border-color 0.3s; /*transição suave de 0.3 segundos para mudanças na cor da borda */
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #007bff; /*altera a cor da borda quando o campo é focado */
            outline: none; /*remove o contorno padrão que aparece ao focar no campo */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px; /* arredonda os cantos do botão */
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover { /* botão para se cadastrar */ 
            background-color: #0056b3;
        }
    </style>
</head>
    <div>
        <div class="container">
            <body>
                <form action="cadastros_salvos.php" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Insira um nome..." required><br></br> <!-- required para sinalizar campo obrigatório -->
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Insira um endereço de e-mail..."><br></br>
                    <label for="perfil">Foto:</label>
                    <input type="file" name="imagem" id="imagem" accept="image/*"><br><br>

                    <button type="submit">Cadastrar</button>
                </form>
            </body>
    </div>
</html>