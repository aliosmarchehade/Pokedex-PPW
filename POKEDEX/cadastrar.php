<?php
@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$senha = $_POST['senha'];

if(strlen($nome) == 0 || strlen(($senha) ==0) || strlen(($senha) ==0) ){
    header("Location: erro.php");
    exit(0);
} 

$conn = new mysqli("localhost", "root","","pokedex");
$sql = "INSERT INTO usuario VALUES (null,'$nome','$email','$senha')";
$result= $conn->query($sql); 


if(!$result){
    header("Location:pokedex.php");
    exit(0);  

} else{
    session_start();
    $_SESSION['usuario'] = $nome;
    $_SESSION['senha'] = $senha;
    header("Location: pokedex.php");
    exit(0);
}
?>