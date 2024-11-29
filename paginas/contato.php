<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    echo "Obrigado pelo contato, $nome! Responderemos em breve no e-mail: $email.";
} else {
    echo '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato - Airsoft Gamer</title>
        <link rel="stylesheet" href="../styles/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="assets/imagens/logo.png" alt="Logo Airsoft">
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="../index.php">Início</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php" class="ativo">Contato</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="contato">
                <h1>Contato</h1>
                <form action="contato.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                    
                    <button type="submit">Enviar</button>
                </form>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Airsoft Gamer. Todos os direitos reservados.</p>
        </footer>
    </body>
    </html>';
}
?>