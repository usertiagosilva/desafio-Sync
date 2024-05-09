<?php
// Configurações do banco de dados
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "perfil"; 

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_errno) {
    echo "Conexão falhou!";
}
else {
    echo "Conexão efetuada com sucesso";
}
?>
