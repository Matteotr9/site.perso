<!DOCTYPE html>
<html lang="FR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Compétences</title>
    <link rel= "stylesheet" href="css/css.css"/>
    <script src="https://kit.fontawesome.com/04e3fff539.js" crossorigin="anonymous"></script>



  </head>
  <body>
    <?php
include "index.php";
?>
<div id="centrer">
  <br><br><br><h1>Compétences</h1></br></br></br>
  <img src="image/code.png" alt="image" height="42" width="42"/>
  <h3><strong> Développement,technologies</strong></h3>
  <p> Descriptif de mais compétences en développement :</p>
  <?php
      $content=file_get_contents('fichieryml/Compétences.yml');
      $compétences=yaml_parse($content)['compétences'];
      foreach($compétences as $item){
        	echo "$item";
      }
   ?>
