
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuário</title>
    <!-- Script JS -->
    <script src="js/scripts.js" defer></script>
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Container de Atualização de Informações -->
    <div class="container">
        <h2>Atualize suas informações</h2>
        <form action="usuario.php" id="update-form" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo" required><br>
            <span id="nomeError" class="error-message"></span>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" placeholder="Digite a sua idade" required><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite o seu melhor email" required><br>
            <span id="emailError" class="error-message"></span>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="Digite o seu telefone com DDD" required><br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="Digite a sua rua, numero" required><br>

            <label for="Cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Digite a sua cidade" required><br>

            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" placeholder="Digite o seu estado"><br>

            <label for="biografia">Biografia:</label>
            <textarea id="biografia" name="biografia" rows="4" placeholder="Fale um pouco sobre voce..." required></textarea><br>
            <span id="biografiaError" class="error-message"></span>

            <button type="submit" name="submit">Atualizar Informações</button>
        </form>
    </div>
    <!-- Container de Informações Atualizadas -->
    <div class="container">
        <div class="profile-info">
            <div class="profile-pic-container">
                <img src="img/avatar.png" alt="Foto de perfil" class="profile-pic" id="profilePic">
                <input type="file" id="fileInput" accept="image/*">
                <label for="fileInput" id="fileLabel">Carregar Nova Foto</label>
            </div>
            <div class="profile-update">
                <h2 id="nomeView"></h2>
                <p>Idade: <span id="idadeView"></span></p>
                <p>E-mail: <span id="emailView"></span></p>
                <p>Telefone: <span id="telefoneView"></span></p>
                <p>Endereço: <span id="enderecoView"></span></p>
                <p>Cidade: <span id="cidadeView"></span></p>
                <p>Estado: <span id="estadoView"></span></p>
                <p>Biografia: <span id="biografiaView"></span></p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Empresa. Todos os direitos reservados.</p>
    </footer>  
</body>
</html>