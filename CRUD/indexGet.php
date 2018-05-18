<?php include("estilo.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <h1>Listar</h1>
    <a href="/crud/create.php"><button class="btn btn-info btn-sm">Criar</button></a>
    <br/><br/>
    <table border="1">
      <tr align="center"><td>ID</td><td>Nome</td><td>End</td><td>Email</td><td colspan="2">Ação</td></tr>
        <?php
          foreach($dados as $i=>$v) {
            echo "<tr align='center'>";
            foreach ($v as $i2 => $v2) {
              echo "<td>$v2</td>";
            }
            echo "<td><a href='/crud/editar.php?id={$v[0]}'>Editar</a></td>";
            echo "<td><a href='/crud/delete.php?id={$v[0]}'>Excluir</a></td>";
            echo "</tr>";
          }
        ?>
    </table>
    <br/>
    <a href="<?= $_SERVER["SCRIPT_NAME"] ?>/Anterior/<?= $inicioPagina ?>">Anterior</a> |
    <a href="<?= $_SERVER["SCRIPT_NAME"] ?>/Proxima/<?= $inicioPagina ?>">Próximo</a> 
  </body>
</html>