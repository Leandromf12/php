<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="style.php" rel="stylesheet">
    <title>Tela Exibição</title>
    
  </head>
  <body> 
<?php
require 'conct.php';

$list = [];
$sql = $pdo->query("SELECT * FROM pessoat");
if($sql->rowCount() > 0){
    $list= $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>listagem</h1>

<table>
    <tr>
        <th class="content">ID</th>
        <th class="content">Nome</th>
        <th class="content">Email</th>
        <th class="content">Senha</th>
        <th class="edit">Ações</th>
    <?php foreach($list as $pessoa):?>
    <tr>
        <td class="content"><?=$pessoa["id"];?></td>
        <td class="content"><?=$pessoa["nome"];?></td>
        <td class="content"><?=$pessoa["email"];?></td>
        <td class="content"><?=$pessoa["senha"];?></td>
        <td class="edit"><button type='submit' onclick="location.href='update.php?id=<?=$pessoa['id'];?>'">editar</button>
        <button type='submit' onclick="location.href='deletar.php?id=<?=$pessoa['id'];?>'">deletar</button>
    </td>
    </tr>
    <?php endforeach;?>
</table>
<input type="button" onclick="location.href='cad.php'" value="Cadastrar"></input>  

</body>
</html>