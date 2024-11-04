<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }
        a {
    color: #f0f0f0; /* Cor do link */
    text-decoration: none; /* Remove o sublinhado */
    font-weight: bold; /* Deixa o texto em negrito */
}

a:hover {
    text-decoration: underline; /* Adiciona sublinhado ao passar o mouse */
}

    </style>
</head>
<body>

    <p>Bem-vindo à Home! Este é o conteúdo da página principal.</p>
    <img src="cadastro.png" alt="Cadastro" style="width:350px; height:auto; margin: 20px;" id="imagemCadastro">

    <!-- Texto animado -->
    <h1 id="textoCadastro" class="animate__animated">
    <a href="http://localhost/aulasphp/?page=Cadastrar" class="animate__heartBeat">Cadastre-se agora!</a>
</h1>
    <script>

        // Ativa a animação ao carregar a página
        window.onload = function() {
            document.getElementById("textoCadastro").classList.add("animate__heartBeat");
        };

        // Você pode ativar a animação ao clicar na imagem, se desejar
        document.getElementById("imagemCadastro").onclick = function() {
            document.getElementById("textoCadastro").classList.add("animate__heartBeat");
        };
    </script>
</body>
</html>