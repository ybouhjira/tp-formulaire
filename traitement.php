<?php
$form = [
  'email' => ['test' => '/[a-z0-9_-]{4,}@[a-z0-9]+\.[a-z]{2,4}/'],
  'tel' => ['test' => '/\(\d{3}\)\d{6}/'],
  'nom'    => [],
  'prenom' => [],
  'livre'  => [],
  'os'    => []
];

try {
  foreach ($form as $key => $options) {
    if(empty($_POST[$key]))
      throw new Exception("$key est obligatoire");

    if(isset($options['test']) && !preg_match($options['test'], $_POST[$key]))
      throw new Exception("$key est invalide");
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
  <meta charset="utf-8">
  <style>
    table {
      margin: auto;
    }
    td {
      border : 1px solid rgb(150, 150, 150);;
      padding : 5px 20px;
    }

    tr:nth-child(2n+1) {
      background: rgb(220, 220, 200);
    }
    tr:first-child {
      background: rgb(150, 150, 150);
      color: white;
    }
    table {border-collapse: collapse;}
  </style>
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
</body>
</html>
