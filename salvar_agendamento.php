<?php
$servername = "seu-endereco-rds-ou-localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "nome-do-banco";

// Conexão ao banco
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtendo dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$idade = $_POST['idade'];
$atividade = $_POST['atividade'];
$telefone = $_POST['telefone'];

// Inserindo os dados
$sql = "INSERT INTO agendamentos (nome, email, altura, peso, idade, atividade, telefone) 
        VALUES ('$nome', '$email', $altura, $peso, $idade, '$atividade', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Agendamento salvo com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>