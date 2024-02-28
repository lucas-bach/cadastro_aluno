<?php
require_once "configurar_ambiente.php";

function conectar_db(){
    // Conexão com o banco de dados
    $servername = "172.21.0.1";
    $username = "root";
    $password = "123456";
    $dbname = "teste";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        return null;
    }

    return $conn;
}

?>