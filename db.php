<?php
 
try {
    //$dbh = new PDO($dsn, $user, $password);
    $dbh = new PDO("mysql:host=localhost;dbname=nom_signataire", "root", "root");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    //throw new PDOException($e);
}
if (isset ($_POST['sign'])){
                $sth = $dbh->prepare("INSERT INTO infos_tbl (nom) VALUES(?)");
                $sth->execute(array($_POST['name']));
            }
header('Location: index.php');

?>