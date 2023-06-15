<?php
require 'conct.php';
$id = filter_input(INPUT_POST,"id");
$nome = filter_input(INPUT_POST,'user');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($nome && $email && $password){

$sql = $pdo->prepare("UPDATE pessoat SET nome=:nome, email= :email, senha= :senha WHERE id= :id");
$sql->bindValue(':id',$id);
$sql->bindValue(':nome',$nome);
$sql->bindValue(':email',$email);
$sql->bindValue(':senha',$password);
$sql->execute();


header("Location: index.php");
exit;
}else{
    header("Location: index.php");
}


?>