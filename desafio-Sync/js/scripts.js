 
  // JavaScript para atualizar informações do usuário
  document.getElementById("update-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita o recarregamento da página

    // Obter os valores dos campos do formulário
    var nome = document.getElementById("nome").value;
    var idade = document.getElementById("idade").value;
    var rua = document.getElementById("rua").value;
    var bairro = document.getElementById("bairro").value;
    var estado = document.getElementById("estado").value;
    var biografia = document.getElementById("biografia").value;

    // Atualizar as informações do usuário na seção de informações
    document.getElementById("nomeView").textContent = nome;
    document.getElementById("idadeView").textContent = idade;
    document.getElementById("ruaView").textContent = rua;
    document.getElementById("bairroView").textContent = bairro;
    document.getElementById("estadoView").textContent = estado;
    document.getElementById("biografiaView").textContent = biografia;

    // Limpar os campos do formulário
    this.reset();
});

// JavaScript para carregar uma nova foto de perfil
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