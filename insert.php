<?php
require 'conct.php';
$nome = filter_input(INPUT_POST,'user');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($nome && $email && $password){
    $sql = $pdo->prepare("SELECT * FROM pessoat WHERE email= :email");
    $sql->bindValue(':email',$email);
    $sql->execute();
    if($sql->rowCount() === 0){
$sql = $pdo->prepare("INSERT INTO pessoat(nome,email,senha) VALUES (:nome,:email,:senha)");
$sql->bindValue(':nome',$nome);
$sql->bindValue(':email',$email);
$sql->bindValue(':senha',$password);
$sql->execute();

header("Location: index.php");
exit;
    }else{
        header("Location: cad.php");
    }
}else{
    header("Location: cad.php");
    exit;
}
?>