<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="style.php" rel="stylesheet">
    <title>Tela Update</title>
  </head>
  <body>
  
<?php
require 'conct.php';

$pessoa = [];
$id = filter_input(INPUT_GET,"id");


if($id){
    $sql = $pdo->prepare("SELECT * FROM pessoat WHERE id= :id");
    $sql->bindValue('id',$id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $pessoa = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }

}else{
    header("Location: index.php");
}
?>
<h1>Update pessoa</h1>
<form method="POST" action="upd.php">
    <input type="hidden" name="id" value="<?=$pessoa["id"];?>">
<label>
    Nome: <input type="text" name="user" value="<?=$pessoa["nome"];?>">
</label>
<label>
    Email: <input type="email" name="email"value="<?=$pessoa["email"];?>">
</label>
<label>
    Senha: <input type="text" name="password"value="<?=$pessoa["senha"];?>">
</label>
<button type="submit">Update</button>

</form>

</body>
</html>
