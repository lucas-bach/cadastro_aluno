<?php


header( 'Content-Type: application/json; charset=UTF-8' );

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Recupera os valores dos campos do formulário  
    $nomeCompleto = $_POST['nomeCompleto'];
    $idade = $_POST['idade'];
    $dataNascimento = $_POST['dataNascimento'];
    $telefone = $_POST['telefone'];
    $endereco = utf8_decode($_POST['endereco']);
    $numero = $_POST['numero'];
    $plano = $_POST['plano'];

    echo '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Alunos</title>
        <link rel="stylesheet" href="../css/pag.css">
    </head>
    <body>';
    echo "<h1>{$endereco}</h1>";
    echo '</body></html>';
    exit(0);

    $conn = conectar_db();

    // Verifica se a conexão foi bem-sucedida
    if (!$conn) {
        die(json_encode("Falha na conexão com o banco de dados"));
    }

    // Gera um número de matrícula (pode ser um número aleatório neste exemplo)
    $numeroMatricula = mt_rand(100000, 999999);
}
?>
    
