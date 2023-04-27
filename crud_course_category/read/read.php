<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LISTA DE CATEGORIAS DE CURSO</title>
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

  <h2>LISTA DE CATEGORIAS DE CURSO</h2>

  <?php

  require_once('conection.php');

  if($num_position > 0){ ?>

   <table>
     <tr>
       <th>ID</th>
       <th>NOME</th>
       <th>NÚMERO ID</th>
       <th>CATEGORIA MÃE</th>
     </tr>

     <?php for($i = 0; $i < $num_position; $i++) { ?>

      <tr>
        <td><?php echo $result_array[$i]['id']; ?></td>
        <td><?php echo $result_array[$i]['name']; ?></td>
        <td><?php echo $result_array[$i]['idnumber']; ?></td>
        <td><?php echo $result_array[$i]['parent']; ?></td>
        <td><a href="../update/update.php?id=<?php echo $result_array[$i]['id']; ?>">EDITAR</td>
        <td><a href="../delete/delete.php?id=<?php echo $result_array[$i]['id']; ?>">EXCLUIR</a></td>
      </tr>

    <?php } ?>

  </table>

<?php } else { ?>

  <h4>Nenhuma caategoria de curso listada.</h4>

<?php } ?>

</body>
</html>