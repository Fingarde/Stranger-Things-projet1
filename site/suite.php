<?php
printf('<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="UTF-8">
			<title>Dustin Henderson</title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../css/style_php.css">
		</head>
		<body>
			<header>
				<div id=menu>
					<img id="eleven" src="../images/ressources/eleven.png">
					<div id="header-center">
						<h1><u>Dustin Henderson</u></h1>
						<nav>
							<a href="../index.html"><u>Accueil</u></a>
							<a href="suite/proches.html"><u>Mes proches</u></a>
							<a href="suite/centres-interets.html"><u>Mes centres d\'interets</u></a>
							<div id=dropdown>
								<a id=dropdown-btn><u>Médias</u></a>
								<div id="dropdown-content">
									<a href="photos.html"><u>Photos</u></a>
									<a href="videos.html"><u>Vidéos</u></a>
								</div>
							</div>
						</nav>
					</div>
					<div id="social">
						<a href="https://www.facebook.com/"><img src="../images/ressources/facebook.png" height="90"></a>
						<a href="https://twitter.com/Stranger_Things"><img src="../images/ressources/twitter.png" height="90"></a>
					</div>
				</div>
			</header>
			<div id="container">
				<section>');
		

	if(!isset($_POST['input_nom']) || !isset($_POST['input_email']) || !isset($_POST['input_demande']) || !isset($_POST['input_premVisite']) || !isset($_POST['input_message']))
	{
		print('
				<h2>Veulliez saisir tous les champs requis</h2>
				<h3><a href="contact.html">Retour</a></h3>
			');
	} else if(preg_match('/.*@.*\..*/', $_POST['input_email']) == 0)
	{
		print('
				<h2>Email invalide, veuillez réessayer</h2>
				<h3><a href="contact.html">Retour</a></h3>
			');
	} else {

		print('<article>
					<div>');

		print('<h2>Nom</h2>');
		print('<h3>' . $_POST['input_nom'] . '</h3>');

		print('<h2>Email</h2>');
		print('<h3>' . $_POST['input_email'] . '</h3>');

		if(isset($_POST['input_nom'])) {
			print('<h2>Numero</h2>');
			print('<h3>' . $_POST['input_numero'] . '</h3>');
		}
		
		print('</div><div>');

		print('<h2>Première visite</h2>');
		print('<h3>' . $_POST['input_premVisite'] . '</h3>');

		print('<h2>Demande</h2>');
		print('<h3>' . $_POST['input_demande'] . '</h3>');

		print('<h2>Message</h2>');
		print('<h3>' . $_POST['input_message'] . '</h3>');

		print('</div></article>');

		print('<h2 id="confirm"><u>Votre demande a bien été prise en compte</u></h2>');
	}

	print('</section>
			</div>
			<footer>
				<a href="contact.html"><u>Nous contacter</u></a>
				<div id="credits">
					Pays Antoine   -    Bertrand Timothé   |   1ère année DUT Informatique
				</div>
			</footer>
		</body>
	</html>');
?>

