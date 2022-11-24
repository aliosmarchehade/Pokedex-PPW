<?php
$conn = new mysqli("localhost", "root","","pokedex");

@$nome = trim($_POST['usuario']);
@$senha = trim($_POST['senha']);

$sql = "SELECT * FROM usuario WHERE nome='$nome' AND senha='$senha'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    session_start();
    $_SESSION['nome']=$nome;
    $_SESSION['senha']=$senha;
    header("Location: pokedex.php");
    exit(0);
} else{
    header("Location: erro.php");
    exit(0);
}

?>