<?php include("header.php"); ?>

<div id="titre"><h2>Editez vos pages</h2></div>
<center>
	<?php include("ckeditor/ckeditor.php"); ?>
	<form action="editor2.php" method="POST">
		<?php
			$nom=$_REQUEST['nomfichierouvrir'];
			$lefichier = '';
			$fp=fopen($nom,"r");//ouverture du fichier
			while(!feof($fp))//on parcoure toute les lignes
			{
				$lefichier .= fgets($fp,4096);//lecture du contenu de la ligne
			}
			fclose($fp);

			$oFCKeditor = new CKEditor();//nouvelle isntance de FCKeditor
			$oFCKeditor->Width = '100%';
			echo "<table border=1 width='85%' height='400'><tr><td>";
			$oFCKeditor->editor("FCKeditor1", $lefichier);
			echo "</td></tr></table>";
			echo "Enregistrer le fichier sous:<input type='text' name='toto' size='20' value='".$nom."' disabled='disabled'><br/><br/>";
			echo "<input type='hidden' name='nomfichier' value='".$nom."'>";
		?>
		
		<input type="submit" value="Enregistrer">
	</form>
	<br/><br/>
	
</center>

<?php include("footer.php"); ?>