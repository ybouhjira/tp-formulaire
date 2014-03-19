<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="table.css">
  <style type="text/css">
    #button-container {
      text-align: center;
    }

    #button-container a {
      text-decoration: none;
      display: inline-block;
      padding: 10px 20px;
      background-color: blue;
      color: white;
      box-shadow: 0 0 2px #a30;
      border-radius: 0px;
      -webkit-transition : all 300ms ease-out;
      -moz-transition : background-color 1s ease;
      -ms-transition : background-color 1s ease;
      -o-transition : background-color 1s ease;
      -transition : background-color 1s ease;
    }

    #button-container a:hover {
      border-radius: 5px;
      background-color: rgb(150, 50, 0);
      box-shadow: 0 0 10px 5px #a30;
    }
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

  <div id="button-container">
    <a href="autre_page.php">Voire les données stockées</a>
  </div>
</body>
</html>