<?php
require('db.php');
require('functions.php');

$DataReceived = ( !empty( $_REQUEST['submitted'] ) ) ? $_REQUEST['submitted'] : '';

if($DataReceived == 'form')
    {

        $nome   = trim($_REQUEST['nome']); // limpa a string
        $telefone  = trim($_REQUEST['telefone']);
        $endereco  = trim($_REQUEST['endereco']);
        $idade  = trim($_REQUEST['idade']);
        //entro com db
        ins($conn, $nome, $telefone, $endereco, $idade);
        
    }
if($DataReceived == 'select'){
    echo sel($conn);
}

$conn->close();
?>