<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
  <h1>Données stockés dans la session</h1>
  <table>
    <tr>
      <td>Champ</td>
      <td>Valeur</td>
    </tr>
    <?php session_start();?>
    <?var_dump($_SESSION);?>
    <?php foreach ($_SESSION as $key => $value) : ?>
      <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>