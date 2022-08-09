<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "musica";

//criando conexão
$conn = mysqli_connect ($servername, $username, $password, $database);

if(!$conn){
die("Falha na conexão: ".mysqli_connect_error());
}

//echo "Conexão bem sucedida! <br> <br>";
?>
