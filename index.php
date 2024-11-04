    <!-- array que percorre as abas da página -->
<?php
    $abas = [
        'Home' => 'home.php', 
        'Cadastrar' => 'cadastrar.php', 
        'Listar' => 'listar.php'
    ];
?>

    <!-- define que a linguagem utilizada é html -->
<!DOCTYPE html>

    <!-- linguagem -->
<html lang="pt_BR"> 
    
<head>

    <!-- codificação de caracteres como UTF-8 -->
    <meta charset="UTF-8">
    
    <title>DESAFIO1</title>

    <style type="text/css"> 
    
        * {/* o asterisco funciona como um seletor universal; remove o margin e padding padrão */
            margin: 0;
            padding: 0; /* espaçamento ao redor do texto*/
            box-sizing: border-box;
        }
        body { 
            font-family: Arial, sans-serif; /*define o estilo geral do corpo da página */
            height: 100vh; /* define que a altura do corpo da página é 100% da altura da tela. */
            display: flex;
            flex-direction: column; /* flexbox para centralizar o conteúdo verticalmente, empilhando seus elementos nessa direção */
            align-items: center;
            background: linear-gradient(135deg, #3a7bd5, #00d2ff); /* gradiente azul */
            background-size: cover; /* o fundo cobre toda a página */
            color: white;
        }
        header {
            padding: 8px 10px;
            width: 100%; /* define que o cabeçalho ocupe 100% da largura da tela. */ 
            text-align: center;
            background-color: #00509e;
        }
        a {
            margin: 0px 10px;
            display: inline-block; /* espaçamento entre os links */
            color: white;
            font-size: 17px;
            text-decoration: none; /* Remove o sublinhado padrão dos links. */
        }
        section {
            margin: 20px auto;
            padding: 20px;
            max-width: 960px;
            border-radius: 10px; /* Arredonda os cantos da seção. */
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5); /* Fundo semi-transparente */
        }
        h2 {
            padding: 8px 10px;
            border-radius: 5px;
            color: white;
            background-color: #00509e; /* Azul escuro */
        }
        p {
            margin-top: 10px;
            font-size: 16px;
            color: white;
        }
    </style>
</head>
<body>
    <header>

        <!-- Exibe as abas e o conteúdo -->
        <?php 
        /* loop que percorre o array $abas e para cada item, cria um link (<a>).
        O href contém um parâmetro page, que será usado para identificar a página clicada. */
        foreach ($abas as $key => $value) {
            echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>'; /*.ucfirst p/ colocar a 1° letra da aba em maiúscula */
        }
        ?>
    </header>

    <!-- Seção onde o conteúdo das abas será exibido -->
    <section>
        <h2>
            <?php
                $pagina = (isset($_GET['page']) ? $_GET['page'] : 'Home');
                /*Verifica se existe o parâmetro page na URL usando $_GET['page'].
                 Se não existir, define a página como "Home". */
                if (!array_key_exists($pagina, $abas)) {
                    $pagina = 'Home';
                }
                echo ucfirst($pagina); //página atual
            ?>
        </h2>
        <p>
            <?php

                // Inclui o arquivo correspondente à aba selecionada
                // Usa include_once para evitar múltiplas inclusões do mesmo arquivo
                include_once($abas[$pagina]);
            ?>
        </p>
    </section>
</body>
</html>