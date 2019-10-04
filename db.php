<?php
 // Connexion à la base de données
try {
    $dbh = new PDO("mysql:host=localhost;dbname=nom_signataire", "root", "root",[
        PDO::ATTR_EMULATE_PREPARES => false, 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
// Vérification et Insertion du nom à l'aide d'une requête préparée
if (isset ($_POST['sign'])){
    //Vérification du nom dans la base de donnée
                $name = $_POST['name'];
                $res_n = $dbh->query("SELECT * FROM infos_tbl WHERE nom='$name'");
                $existName = $res_n->rowCount();
                //Insertion du nom dans la base de donnée
                if(is_string($name) && $existName == 0) {
                    $sth = $dbh->prepare("INSERT INTO infos_tbl (nom) VALUES(:name)");
                    $sth->bindParam('name', $name,PDO::PARAM_STR);
                    $sth->execute(array($_POST['name']));
                }else {
                    $result2 = "Cette personne existe deja";
                }
            }
          
// Récupération des noms
$result = $dbh->query('SELECT nom FROM infos_tbl ORDER BY ID DESC LIMIT 0, 22');
