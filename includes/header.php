<?php
if(!isset($config['title']) || $config['title'] == ""){
  $config['title'] = "";
}
if(!isset($config['desc']) || $config['desc'] == ""){
  $config['desc'] = "Site Internet du cabinet d'Ostéopathie Jean Eymare à Lyon. Vous y trouverez toutes les informations indispensables et un ensemble de réponses à vos questions sur l'ostéopathie et ses pratiques.";
}
if(!isset($config['keywords']) || $config['keywords'] == ""){
  $config['keywords'] = "Jean Eymare, Osthéopathe Lyon";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Marianne" />
    <link rel="icon" type="image/png" href="./img/favicon-ostheo.png" />
    <meta name="description" content="<?php echo $config['desc']; ?>" />
    <meta name="keywords" content="<?php echo $config['keywords']; ?>" />
    <title>Jean Eymare, osthéopathe | <?php echo $config['title']; ?></title>
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/phone.css" />
    <link rel="stylesheet" href="./css/tablet.css" />

  </head>


  <body>
    <div class="container-fluid">
