<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LISTA DE CURSOS</title>
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

  <h2>LISTA DE CURSOS</h2>

  <?php

  $course_id = addslashes($_POST['course_id']);  

  require_once('conection.php');

  $set_enrolled_users_data = get_enrolled_users_data($course_id);

  //Numero de posições do vetor
  $num_position = count($set_enrolled_users_data);

  if($num_position > 0){ ?>

   <table>
     <tr>
       <th>ID</th>
       <th>NOME</th>
       <th>E-MAIL</th>
       <th>ID PAPEL</th>
       <th>PAPEL</th>
     </tr>

     <?php for($i = 0; $i < $num_position; $i++) { ?>

      <tr>
        <td><?php echo $set_enrolled_users_data[$i]['id']; ?></td>
        <td><?php echo $set_enrolled_users_data[$i]['fullname']; ?></td>
        <td><?php echo $set_enrolled_users_data[$i]['email']; ?></td>
        <td><?php echo $set_enrolled_users_data[$i]['roleid']; ?></td>
        <td><?php echo $set_enrolled_users_data[$i]['role_shortname']; ?></td>
        <td><a href="../unenrol/unenrol.php?course_id=<?php echo $course_id; ?>&user_id=<?php echo $set_enrolled_users_data[$i]['id']; ?>">DESINSCREVER</a></td>
      </tr>

    <?php } ?>

  </table>

<?php } else { ?>

  <h4>Nenhum usuários inscrito neste curso.</h4>

<?php } ?>

</body>
</html>