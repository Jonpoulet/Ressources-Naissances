<?php 
$titre = "Services";
include("Actions/mysql.php");
include("header.php"); 
$query="select * from service";
$result=mysql_query($query);
?>

<HTML>
<HEAD>
<TITLE>Fichier de test FCKeditor2</TITLE>
</HEAD>
<BODY>
<CENTER>
<?php
$x=0;
 while($val = mysql_fetch_array($result))
{
$nomFichier=$val['lienPage'];
echo $nomFichier;
$letout=stripslashes($_REQUEST['FCKeditor'.$x]); //endroit où se situe FCKeditor

$fp=fopen($nomFichier, "w");
fputs($fp, $letout);
fclose($fp);

echo $letout;
$x++;
$nomFichier=null;
}
?>
<P><A HREF="fckeditor0.php">Retour sur la page 1</A><P>
</CENTER>
</BODY>
</HTML>