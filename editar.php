<?php
include("conexao.php");

$codigo = $_POST['ID'];
$sql = "Select * from musicas where codigo='$codigo'";
$query = mysqli_query($conn, $sql) or die ("Erro ao carregar imóvel");

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
<meta name = "viewport" content = "initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<title> PMusic - Player </title>
</head>
<body>

<?php
while($linha = mysqli_fetch_assoc($query)){?>

<div id="player">

<form id="form1" action="deletar.php" method="post">
<center> <input type="text" class="inp" name="" placeholder="Buscar por Nome" required> </center> <br>
<center> <input type="submit" class="btn" name="" value="Buscar" required> </center> <br>
</form>
<form id="form2" action="editar.php" method="post">
<center> <input type="text" class="inp" name="" placeholder="Buscar por ID" required> </center> <br>
<center> <input type="submit" class="btn" name="" value="Buscar" required> </center> <br>
<br> <br>
<center> <a href="listar.php" id="lista"> Lista de Músicas </a> </center>

</form>

<form id="form3" action="atualizar.php" method="post">
<input type="hidden" name="codigo" value="<?php echo $linha['codigo']?>">
<center> <input type="text" class="inp" name="artista" value="<?php echo $linha['artista']?>" placeholder="Artista" required> </center> <br>
<center> <input type="text" class="inp" name="musica" value="<?php echo $linha['nome']?>" placeholder="Nome da Música" required> </center> <br>
<center> <input type="text" class="inp" name="album" value="<?php echo $linha['album']?>" placeholder="Álbum" required> </center> <br>
<center> <input type="text" class="inp" name="ano" value="<?php echo $linha['ano']?>" placeholder="Ano" required> </center> <br>
<center> <input type="text" class="inp" name="duracao" value="<?php echo $linha['duracao']?>" placeholder="Duração" required> </center> <br>
<center> <input type="submit" class="btn" value="Atualizar" required> </center> <br>
</form>

</div>

<?php }?>
</body>
</html>
