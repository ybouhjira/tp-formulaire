<?php

$form = [
    'nom' ,
    'prenom',
    'email' => ['test' => '/[a-z0-9_-]{4,}@[a-z0-9]+\.[a-z]{2,4}/'],
    'tel' => ['test' => '/\(\d{3}\)\d{6}/'],
    'livre',
    'os'
  ];

try {
  validate_form();
} catch (Exception $e) {
  echo $e->getMessage();
}



function validate_form($form) {
  foreach ($form as $key => $options) {
    if(empty($_POST[$key]) || (is_integer($key) && empty($_POST[$key])))
      throw new Exception("$key est obligatoire");

    if(isset($options['test']) && !preg_match($options['test'], $_POST[$key]))
      throw new Exception("$key est invalide");
  }
}
