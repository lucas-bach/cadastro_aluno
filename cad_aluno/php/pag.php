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
}
?>
    
