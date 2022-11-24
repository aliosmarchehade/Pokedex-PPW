<?php
session_start();

$usuario = $_SESSION['usuario'];
$senha = $_SESSION["senha"];

$con = new mysqli("localhost", "root", "", "pokedex");

$sql = "SELECT * FROM usuario WHERE nome='$login' AND senha = '$senha' ";

$result = $con->query($sql);

if ($result->num_rows == 1) {
    header("Location: erro.php");
    exit(0);
}
?>