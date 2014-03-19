<?php

try 
{

  // Le formulaire
  $form = [
    'email' => ['test' => '/[a-z0-9_-]{4,}@[a-z0-9]+\.[a-z]{2,4}/'],
    'tel' => ['test' => '/\(\d{3}\)\d{6}/'],
    'nom'    => [],
    'prenom' => [],
    'livre'  => [],
    'os'    => []
  ];

  // validation
  foreach ($form as $key => $options) {
    if(empty($_POST[$key]))
      throw new Exception("$key est obligatoire");

    if(isset($options['test']) && !preg_match($options['test'], $_POST[$key]))
      throw new Exception("$key est invalide");
  }

  // template
  require_once 'resultat.php';
  
  // enregistrement des données dans une session
  require_once 'session.php';
} 
catch (Exception $e) 
{
  echo $e->getMessage();
}
