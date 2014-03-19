<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
  <table>
    <tr>
      <td>Champ</td>
      <td>Valeur</td>
    </tr>
    <?php foreach ($_POST as $key => $value) : ?>
      <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <p>
    <a href="autre_page.php">Passer vers une autre page</a>
  </p>
</body>
</html>