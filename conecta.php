<?php
$host = "localhost";
$tabela = "lista-os";
$usuario = "root";
$senha = "";
// Create connection
$link = mysqli_connect ($host, $usuario,$senha, $tabela);

// Check connection
if (mysqli_connect_errno($link)) {
    echo "Connection failed: ";
	
}

?>