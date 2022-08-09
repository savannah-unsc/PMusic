<?php
include_once("conexao.php");

$artista = $_POST['artista'];
$musica = $_POST['musica'];
$album = $_POST['album'];
$ano = $_POST['ano'];
$duracao = $_POST['duracao'];

$sql = "INSERT INTO musicas (artista, nome, album, ano, duracao) values('$artista', '$musica', '$album', $ano, $duracao)";
$query = mysqli_query($conn, $sql) or die ("Erro ao cadastrar música");

if (mysqli_affected_rows($conn)){
echo "<script> window.alert('Música cadastrado com sucesso') </script>";
echo "<script> location.href='index.html'</script>";
}
else{
echo "<script> window.alert('Erro ao cadastrar música') </script>";
echo "<script> location.href='index.html'</script>";
}
?>
