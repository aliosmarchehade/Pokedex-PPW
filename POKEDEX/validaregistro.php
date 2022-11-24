<?php
$conn = new mysqli("localhost", "root","","pokedex");
session_start();
$nome = $_SESSION['nome'];
$senha = $_SESSION['senha'];
$sql = "SELECT * FROM usuario WHERE nome='$nome' AND senha='$senha'";
$result = $conn->query($sql);
if($result->num_rows != 1){
    header("Location: pokedex.php");
    exit(0);
}
?>