<!DOCTYPE html>
                   
<html>
	<head>
	<!-- informations sur le document -->
		 <meta name="language" content="fr">
		 <meta name="author" content="Laroche Antoine & Maurin Anthony">
		 <meta name="subject" content="Ressources naissance">
		 <meta name="description" content="Un �ventail de services et d�activit�s pour les futurs parents afin de r�pondre aux nombreux besoins durant la p�riode pr�natale et pour les familles durant la premi�re ann�e du nouveau-n�.">
		 <meta http-equiv="content-type" content="text/html; charset=utf-8">
		 <title>Ressources-naissances</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />
		 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript">
			(function($) 
			{
				$(document).ready(function()
				{
					$('#menu1').ptMenu();
				});
			})(jQuery);
		</script>
	</head>
	<body>
	<!-- corps du document -->
		<div id="banniere">
		<h1> Ressources-naissances banni�re</h1>
		</div>
		<div id="contenu">
			<div id="titre">
			<h2>Accueil ressources-naissances</h2>
			</div>
			<div id="menu-bas">

				<ul id="menu1">
					<li><a href="squelette.php">ACCUEIL</a></li>
					<li>
						<a href="#">� PROPOS DE NOUS</a>
						<ul>
							<li><a href="mission.php">Mission</a></li>
							<li><a href="historique.php">Historique</a></li>
							<li><a href="conseilAdministration.php">Conseil d'administration</a></li>
							<li><a href="notreEquipe.php">Notre �quipe</a></li>
							<li><a href="membres.php">Membres</a></li>
							<li><a href="#">B�n�voles</a></li>
						</ul>
					</li>
					<li>
						<a href="#">ATELIERS/ACTIVIT�S</a>
						<ul>
							<li><a href="#">B�B� S'EN VIENT</a></li>
							<li><a href="#">B�B� EST ARRIV�</a></li>
							<li><a href="#">Caf�s-rencontres</a></li>
							<li><a href="#">Espace allaitement</a></li>
							<li><a href="#">Balado poussette</a></li>
							<li><a href="#">Conf�rences</a></li>
						</ul>
					</li>
					<li>
						<a href="#">SERVICES</a>
						<ul>
							<li><a href="#">Consultation individuelle en allaitement</a></li>
							<li><a href="#">Consultation t�l�phone</a></li>
							<li><a href="#">Marrainage en allaitement</a></li>
						</ul>
					</li>
					<li><a href="#">ASSISTANCE P�RINATALE � DOMICILE</a></li>
					<li>
						<a href="#">PARTENARIAT</a>
						<ul>
							<li><a href="#">Partenaires financiers</a></li>
							<li><a href="#">Organismes partenaires</a></li>
							<li><a href="#">Participation � des regroupements</a></li>
						</ul>
					</li>
					<li><a href="#">NOUS SOUTENIR</a></li>
					<li><a href="#">B�N�VOLAT</a></li>
					<li>
						<a href="#">DOCUMENTATION</a>
						<ul>
							<li><a href="#">Articles</a></li>
							<li><a href="#">Publications</a></li>
						</ul>
					</li>
					<li><a href="nousJoindre.php">NOUS JOINDRE</a></li>
					<li><a href="#">LIENS UTILES</a></li>

				</ul>
			</div>
			<div id="menu-droite">
		
			</div>
			
			<table>
				<tr>
					<td>
						<!--Image mission-->
						<img src="images/logoPetit.jpg" >
					</td>
					<td>
						<br/><u><b>Mission:</b></u><br/><br/>
						&nbsp;&nbsp;&nbsp;Ressources-Naissances est un organisme sans but lucratif qui offre des services et des activit�s accessibles <br/>
						&nbsp;&nbsp;&nbsp;� tous durant la grossesse et la premi�re ann�e de l'enfant tout en favorisant les �changes entre les familles,<br/>
						&nbsp;&nbsp;&nbsp;l'entraide et l'implication communautaire.<br/><br/>
						&nbsp;&nbsp;&nbsp;Ressources-Naissances adapte et intensifie son offre de services pour les familles vivant des situations difficiles:
						<ul>
							<li> gratuit�</li>
							<li> accompagnement individuel</li>
							<li> activit�s de groupe planifi�s selon les besoins</li>
						</ul>
					</td>
				</tr>
			</table>
			
			
			<?php
				include('bloc_partage.html');
			?>
		</div>
	</body>
</html>
