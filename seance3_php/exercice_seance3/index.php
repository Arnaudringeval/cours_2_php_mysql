<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','',$pdo_options);
//$sql = 'SELECT * FROM `news`';
//$sql = 'SELECT auteur, titre, contenu FROM news';
$sql = 'SELECT UPPER(nom) AS nom_maj FROM jeux_video';
$requete = $db->query($sql);
while ($donnees = $requete->fetch())
{
echo $donnees['nom_maj'] . '<br />';
}
$requete->closeCursor();
echo'<br />';
$requete = $db->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');
$donnees = $requete->fetch();
echo $donnees['prix_moyen'];
$requete->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>