<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LISTA DE USUÁRIOS</title>
</head>
<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>
<body>

  <h2>LISTA DE USUÁRIOS</h2>

  <?php

  require_once('conection.php');
  
  if($num_position > 0){ ?>

   <table>
     <tr>
       <th>ID</th>
       <th>USERNAME</th>
       <th>NOME</th>
       <th>E-MAIL</th>
     </tr>

     <?php for($i = 1; $i < $num_position; $i++) { ?>

      <tr>
        <td><?php echo $result_array[0][$i]['id']; ?></td>
        <td><?php echo $result_array[0][$i]['username']; ?></td>
        <td><?php echo $result_array[0][$i]['fullname']; ?></td>
        <td><?php echo $result_array[0][$i]['email']; ?></td>
        <td><a href="../update/update.php?id=<?php echo $result_array[0][$i]['id']; ?>">EDITAR</a></td>
        <td><a href="../delete/delete.php?id=<?php echo $result_array[0][$i]['id']; ?>">EXCLUIR</a></td>
      </tr>

    <?php } ?>

  </table>

<?php } else { ?>

  <h4>Nenhum usuário cadastrado</h4>

<?php } ?>

</body>
</html>
