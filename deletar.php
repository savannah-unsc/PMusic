<?php
include_once("conexao.php");

$codigo = $_POST['ID'];

$sql = "DELETE FROM musicas where codigo='$codigo'";
$query = mysqli_query($conn, $sql) or die ("Erro ao excluir música");

if (mysqli_affected_rows($conn)){
echo "<script> window.alert('Música excluido com sucesso') </script>";
echo "<script> location.href='index.html'</script>";
}
else{
echo "<script> window.alert('Erro ao excluir música') </script>";
echo "<script> location.href='index.html'</script>";
}
?>
