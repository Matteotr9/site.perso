
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<title>Mon site personnel</title>
			<link rel= "stylesheet" href="css.css"/>
			<script src="https://kit.fontawesome.com/04e3fff539.js" crossorigin="anonymous"></script>
		</head>

	<body>

					<nav>
							<div id="PageCentrale">
								<div id="BandeMenuHaut" class="ParamOpaciteMenu">
									<ul id="MenuRubriques">
										<li class="titre"><a href='Accueil.php'>Matteo Trabelsi</a></li>
										<li class="titre"><a href='A_propos.php'>A propos</a></li>
										<?php
												$content=file_get_contents('yaml.yml');
												$menu=yaml_parse($content)['menu'];
												foreach($menu as $item){
													echo "<li class='titre'><a href='$item.php'>$item</a></li>";
												}
									   ?>
									</ul>
								</div>
							</div>
					</nav>

	</body>

	<footer>
								<div id="BandeMenuBas">

										<a href="https://www.linkedin.com/in/matteo-trabelsi-a31226214" class="fa fa-linkedin"></a>
										<a href="https://www.votre_url.com" class="fab fa-discord"></a>
								</div>
	</footer>
</html>
