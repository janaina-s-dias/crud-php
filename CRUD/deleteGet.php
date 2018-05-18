<?php include("estilo.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <h1>Confirma exclusão?</h1>
    <form action="delete.php" method="post">
      <label>ID
        <input type="number" name="id" value="<?= $id ?>" readonly>
      </label>
      <input type="submit" value="Confirmar">
    </form>
  </body>
</html>