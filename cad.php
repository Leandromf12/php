<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="style.php" rel="stylesheet">
    <title>Tela Cadastro</title>
  </head>
  <body>
  <div class="container-div">
<form method="post" action="insert.php">
<label>
    Nome: <input type="text" name="user" required>
</label>
<label>
    Email: <input type="email" name="email" required>
</label>
<label>
    Senha: <input type="password" name="password" minlength="8" required>
</label>
<button type="submit">Salvar</button>
</form>
</div>
</body>
</html>