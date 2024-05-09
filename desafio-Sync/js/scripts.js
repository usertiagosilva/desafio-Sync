// Atualizar informações do usuário
document.getElementById("update-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita o recarregamento da página

    // Obtenha os dados do formulário
    var formData = new FormData(this);

    // Validar os campos
    var nomeValido = validarNome(formData.get("nome"));
    var emailValido = validarEmail(formData.get("email"));
    var biografiaValida = validarBiografia(formData.get("biografia"));

    // Verificar se todos os campos são válidos
    if (nomeValido && emailValido && biografiaValida) {
        // Envie uma requisição AJAX para o script PHP 
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "usuario.php", true);
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                // Requisição bem-sucedida
                console.log(xhr.responseText);
                // Atualizar as informações do usuário na interface
                updateUserInfo(formData);
                // Exiba uma mensagem de sucesso para o usuário
                alert("Usuário cadastrado com sucesso!");
            } else {
                // Requisição mal-sucedida
                console.error(xhr.statusText);
                // Exiba uma mensagem de erro para o usuário
                alert("Ocorreu um erro ao cadastrar o usuário. Por favor, tente novamente.");
            }
        };
        xhr.onerror = function() {
            // Erro de conexão
            console.error(xhr.statusText);
            // Exiba uma mensagem de erro para o usuário
            alert("Erro de conexão. Por favor, verifique sua conexão com a internet.");
        };
        xhr.send(formData);
    } else {
        // Se houver campos inválidos, não envie a requisição e exiba uma mensagem de erro
        alert("Por favor, corrija os erros no formulário antes de enviar.");
    }
});

// Função para atualizar as informações do usuário na interface
function updateUserInfo(formData) {
    var nome = formData.get("nome");
    var idade = formData.get("idade");
    var email = formData.get("email");
    var telefone = formData.get("telefone");
    var endereco = formData.get("endereco");
    var cidade = formData.get("cidade");
    var estado = formData.get("estado");
    var biografia = formData.get("biografia");

    // Atualizar as informações do usuário na interface
    document.getElementById("nomeView").textContent = nome;
    document.getElementById("idadeView").textContent = idade;
    document.getElementById("emailView").textContent = email;
    document.getElementById("telefoneView").textContent = telefone;
    document.getElementById("enderecoView").textContent = endereco;
    document.getElementById("cidadeView").textContent = cidade;
    document.getElementById("estadoView").textContent = estado;
    document.getElementById("biografiaView").textContent = biografia;

    // Limpar os campos do formulário
    document.getElementById("update-form").reset();
}

// Função para carregar uma nova foto de perfil 
document.getElementById("fileInput").addEventListener("change", function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("profilePic").src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

 // Função para validar o nome (deve ter mais de 10 caracteres)
function validarNome(nome) {
    var nomeError = document.getElementById("nomeError");
    if (nome.length < 10) {
        nomeError.textContent = "Digite seu nome completo.";
        nomeError.style.color = "red"; 
        return false;
    } else {
        nomeError.textContent = ""; // Limpa o texto de erro
        return true;
    }
}

// Função para validar o email
function validarEmail(email) {
    var emailError = document.getElementById("emailError");
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        emailError.textContent = "Digite um endereço de e-mail válido.";
        emailError.style.color = "red"; 
        return false;
    } else {
        emailError.textContent = ""; 
        return true;
    }
}

// Função para validar a biografia (deve ter pelo menos 20 caracteres)
function validarBiografia(biografia) {
    var biografiaError = document.getElementById("biografiaError");
    if (biografia.length < 20) {
        biografiaError.textContent = "A biografia deve ter pelo menos 20 caracteres.";
        biografiaError.style.color = "red"; 
        return false;
    } else {
        biografiaError.textContent = ""; 
        return true;
    }
}
     