<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formation</title>

    <title>Mon site personnel</title>

    <script src="https://kit.fontawesome.com/04e3fff539.js" crossorigin="anonymous"></script>
<style>
#gauches{
  float:left;
  margin-top: -170px;

}

.titre{
color: limegreen;
margin-left:40px;
font-family: Chalkduster, fantasy;

}

#PageCentrale {
 margin-left: auto;
 margin-right: auto;
}
/********************************************************/
#BandeMenuHaut {
 display: block;
 position: fixed;
 margin-top: 0px;
 top: 0px;
 left: 0px;
 width: 100%;
 height: 55px;
 /* padding-top: 10px;*/  /*décalage du texte vers le bas*/
 text-align: left;
 text-indent: 0px; /*décalage du texte vers la droite*/
 font-size: 18px;
 color: #FFFFFF;
 background-color: #111;
}

  .ParamOpaciteMenu{
    filter : alpha(opacity=90); /* code en plus pour IE9 */
    opacity: 0.9;
  }

/********************************************************/

ul#MenuRubriques
{
margin-left: 0px;
padding-left: 150px;
white-space: nowrap;
}

#MenuRubriques li
{

display: inline;
list-style-type: none;
}

#MenuRubriques a {

padding: 2px 65px;

}

#MenuRubriques a:link, #MenuRubriques a:visited
{
text-decoration: none;
color: limegreen;

}

#MenuRubriques a:hover
{
text-decoration: none;
color: limegreen;
background-color: #1E5388;

}

 #centrer {
   text-align: center;

 }

 #centrer h1{
   color: #6d071a;

 }

 body{
   background-color: gray;

 }

.fa-linkedin {padding: 20px;
  background: #007bb5;
  color: white;
  margin-left:1290px;

}

.fa {padding: 20px;
font-size: 20px;
width: 70px;
text-align: center;
text-decoration: none;
border-radius: 10%; }

.fab {padding: 20px;
font-size: 20px;
width: 70px;
text-align: center;
text-decoration: none;
border-radius: 10%; }

.fa:hover {
    opacity: 0.7;
}

.fa-discord {padding: 20px;
background: #738A;
color: white;

}

#BandeMenuBas{
position: fixed;
padding: 10px 10px 10px 195px;
bottom: 0;
left: 0;
width: 100%;
height: 60px;
background: #111111;

}

#décalagauche{
  float:left;
 

}
</style>



  	<body>

  					<nav>
  							<div id="PageCentrale">
  								<div id="BandeMenuHaut" class="ParamOpaciteMenu">
  									<ul id="MenuRubriques">
  										<li class="titre"><a href='Accueil.php'>Matteo Trabelsi</a></li>
  										<li class="titre"><a href='A_propos.php'>A propos</a></li>
  										<?php
  												$content=file_get_contents('fichieryml/yaml.yml');
  												$menu=yaml_parse($content)['menu'];
  												foreach($menu as $item){
  													echo "<li class='titre'><a href='$item.php'>$item</a></li>";
  												}
  									   ?>

  									</ul>
  								</div>
  							</div>
  					</nav>


    <div id="centrer">
      <br><br><br><h1>Formation</h1></br></br></br>
      <h3>Conception et administration de bases de données et Conception <br>Web,génie logiciel,cybersécurité et configuration de réseau informatique</br> ainsi que leur entretien de leur bon fonctionnement.</h3>
      <h3><strong>Langages et outils : </strong>HTML,CSS,PHP,Python,SQL<br>
      <strong>Concepts : </strong>  Algorithmique,POO...</br></h3>
    </div>
      <center>
        <div id="gauches">
          <img src="image/stu.jfif" />
            <h2><strong>BTS Services Informatique</strong>
            <h2><strong> Supavenir Saint-Ursule</strong>
              <br>En cours</br> </h2>
              <h2>Situé à Caen en Normandie</h2>
  </body>
  	<footer>
  								<div id="BandeMenuBas">

  										<a href="https://www.linkedin.com/in/matteo-trabelsi-a31226214" class="fa fa-linkedin"></a>
  										<a href="matteotr#6752" class="fab fa-discord"></a>
  								</div>
  	</footer>
  </html>
