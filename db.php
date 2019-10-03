  
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
          
// Récupération des noms
$result = $dbh->query('SELECT nom FROM infos_tbl ORDER BY ID DESC LIMIT 0, 22');
?>