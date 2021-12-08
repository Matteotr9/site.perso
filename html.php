
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<title>Mon site personnel</title>
			<link rel= "stylesheet" href="css.css"/>
		</head>

	<body>


			<div id="PageCentrale">
				<div id="BandeMenuHaut" class="ParamOpaciteMenu">
					<ul id="MenuRubriques">
						<li class="titre">Matteo TRABELSI</li>
						<?php
								$content=file_get_contents('yaml.yml');
								$menu=yaml_parse($content)['menu'];
								foreach($menu as $item){
									echo "<li class='titre'><a href='$item.html'>$item</a></li>";
								}
					   ?>
					</ul>
				</div>
			</div>


		</body>
</html>