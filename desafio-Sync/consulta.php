<?php
// Inclui o arquivo de configuração para conectar ao banco de dados
include_once ('config.php');

// Realiza uma consulta SQL para selecionar os usuários
$result = mysqli_query($conn, "SELECT * FROM usuarios");

// Verifica se existem dados de usuário
if (mysqli_num_rows($result) > 0) {
    // Loop através de cada linha de dados
    while ($row = mysqli_fetch_assoc($result)) {
        // Exibe os dados do usuário
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Idade: " . $row["idade"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Telefone: " . $row["telefone"] . "<br>";
        echo "Endereço: " . $row["endereco"] . "<br>";
        echo "Cidade: " . $row["cidade"] . "<br>";
        echo "Estado: " . $row["estado"] . "<br>";
        echo "Biografia: " . $row["biografia"] . "<br>";
        echo "<hr>"; // Adiciona uma linha horizontal para separar os usuários
    }
} else {
    echo "Nenhum usuário encontrado.";
}

// Fecha a conexão
$conn->close();
?>
