<?php
 // Connexion à la base de données
try {
    $dbh = new PDO("mysql:host=localhost;dbname=nom_signataire", "root", "root");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
// Insertion du nom à l'aide d'une requête préparée
if (isset ($_POST['sign'])){
                $sth = $dbh->prepare("INSERT INTO infos_tbl (nom) VALUES(?)");
                $sth->execute(array($_POST['name']));
            }
// Redirection du visiteur vers la page index
try {
    $dbh = new PDO("mysql:host=localhost;dbname=nom_signataire", "root", "root");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
// Récupération des noms
$result = $dbh->query('SELECT nom FROM infos_tbl ORDER BY ID DESC LIMIT 0, 22');

while($donnees = $result->fetch())
{
	echo '<p>'.htmlspecialchars($donnees['nom']).'</p>';
}



?>