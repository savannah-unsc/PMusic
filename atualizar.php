<?php
include_once("conexao.php");

$codigo = $_POST['codigo'];
$artista = $_POST['artista'];
$musica = $_POST['musica'];
$album = $_POST['album'];
$ano = $_POST['ano'];
$duracao = $_POST['duracao'];

$sql = "UPDATE musicas set artista='$artista', nome='$musica', album='$album', ano='$ano', duracao='$duracao' where codigo='$codigo'";
$query = mysqli_query($conn, $sql) or die ("Erro ao atualizar Música");

if (mysqli_affected_rows($conn)){
echo "<script> window.alert('Música atualizada com sucesso') </script>";
echo "<script> location.href='index.html'</script>";
}
else{
echo "<script> window.alert('Erro ao atualizar música') </script>";
//echo "<script> location.href='index.html'</script>";
}
?>
