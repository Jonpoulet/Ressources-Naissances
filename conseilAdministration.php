<?php
	include("Actions/mysql.php");
	$requete = "SELECT nom, prenom, ca.id_photo, p.id_photo FROM conseil_administration ca INNER JOIN photo p ON p.id_photo = ca.id_photo";
	$resultats = mysql_query($requete) or die(mysql_error());
?>

<?php include("header.php"); ?>

<h2>Conseil d'administration</h2>

<table>
	<tr>
		<th>Nom</th>
		<th>Photo</th>
	</tr>
	<?php while($val = mysql_fetch_array($resultats)) { ?>
		<tr>
			<td><?= $val['prenom'] . " " . $val['nom'] ?></td>
			<td>
				<?php if (isset($val['id_photo'])) { ?>
					<img src="img/conseil administration/miniatures/<?= $val['id_photo'] ?>.jpg" />
				<?php } ?>
			</td>
		</tr>
	<?php } ?>
</table>

<?php 
	include("footer.php"); 
?>
