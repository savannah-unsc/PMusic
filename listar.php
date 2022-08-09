<?php

include ("conexao.php");

$sql = "select * from musicas";

?>​

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
<meta name = "viewport" content = "initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="listra.css">
<title> PMusic - Player </title>
</head>
<body>
<div id="corpo">

<div id="art"> Artista </div>
<div id="mus"> Título </div>
<div id="al"> Álbum </div>
<div id="an"> Ano </div>
<div id="dur"> Duração </div>

<?php
$result=mysqli_query($conn,$sql);
while($tabela=mysqli_fetch_array($result))
{

$artista = $tabela["artista"];
$musica = $tabela["nome"];
$album = $tabela["album"];
$ano = $tabela["ano"];
$duracao = $tabela["duracao"];

echo "<div class='artista'> $artista </div>";
echo "<div class='musica'> $musica </div>";
echo "<div class='album'> $album </div>";
echo "<div class='ano'> $ano </div>";
echo "<div class='duracao'> $duracao </div>";
}
?>
</div>

<br>
<center> <a href="index.html" id="lista"> Voltar para o Inicio </a> </center>

</body>
</html>
