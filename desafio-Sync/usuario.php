<?php

// Inclui o arquivo de configuração para conectar ao banco de dados
include_once ('config.php');

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $biografia = $_POST['biografia'];


    // Insere os dados do usuário no banco de dados
    $sql =  mysqli_query ($conn, "INSERT INTO usuarios(nome, idade, email, telefone, endereco, cidade, estado, biografia)
    VALUES ('$nome','$idade','$email','$telefone','$endereco','$cidade','$estado','$biografia')");

    // Verifica se a inserção foi bem-sucedida
    if ($sql) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
    }

    // Fecha a conexão
    $conn->close();
}
?>