<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <h1>Criar</h1>
    <form action="create.php" method="post">
      <?php include("CamposForm.php"); ?>
      <input type="submit" value="Incluir">
      <a href="index.php">Voltar</a>
    </form>
  </body>
</html>