<?php
echo "Testando conexao <br /> <br />";
//$servername = "192.168.0.80";
$servername = "192.168.0.81";
//$servername = "192.168.0.82";
$username = "phpuser";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>