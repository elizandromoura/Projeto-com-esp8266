<?php


$temp = filter_input(INPUT_GET, 'temp');
if (is_null($temp)) {
  //Gravar log de erros
  die("Dados inválidos");
} 


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "maker";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  //Gravar log de erros
  die("Não foi possível estabelecer conexão com o BD: " . $conn->connect_error);
} 
$sql = "INSERT INTO weather (wea_temp) VALUES ($temp)";

if (!$conn->query($sql)) {
  //Gravar log de erros
  die("Erro na gravação dos dados no BD");
}
$conn->close();
?>
