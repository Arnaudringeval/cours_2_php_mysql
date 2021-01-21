<?php
$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$requete = $db->query('SELECT*FROM`news`');
?>

<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test', 'root', '',$pdo_options);
$requete = $db->query('SELECT*FROM`news`');
while ($news = $requete->fetch())
{
echo $news['auteur'] . '<br />';
}
$requete->closeCursor(); }
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>