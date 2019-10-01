<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Charte des apprenant.e.s</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<h1 class="titreP">Charte des apprenant.e.s</h1>
	<div class="container">
		<div class="section1">
			<h2 class="sousTitre">Fonctionnement global de la promo / Boon of the tiger</h2>
			<ul class="listChart">
				<li>le confort de tou.te.s en compte tu prendras</li>
				<li>des locaux propres tu préserveras</li>
				<li>collectivement le vendredi tu rangeras</li>
				<li>ta météo brièvement tu feras</li>
				<li>la veille tu respecteras</li>
				<li>la feuille de présence tu signeras</li>
				<li>dans le travail concentré tu seras</li>
			</ul>
		</div>
		<div class="section2">
			<h2 class="sousTitre">Etat d'esprit / vision / Hidden war</h2>
			<ul class="listChart">
				<li>à la réussite collective tu oeuvreras</li>
				<li>plus haut que ton cul ne pèteras</li>
				<li>quand la parole tu prendras l'attention tu auras</li>
				<li>au bien être de tous tu veilleras</li>
				<li>dans le partage tu travailleras</li>
				<li>avec patience et persévérance tu apprendras</li>
				<li>ton utopote tu respecteras</li>
				<li>ton esprit ouvert tu garderas</li>
				<li>en autonomie tu feras mais l'esprit de groupe tu protègeras</li>
			</ul>
		</div>
		<div class="section3">
			<h2 class="sousTitre">
				Engagements de l'apprenant.e / ligthningcrushers
			</h2>
			<ul class="listChart">
				<li>assidu tu seras</li>
				<li>le temps de parole tu respecteras</li>
				<li>tes formateurs tu respecteras</li>
				<li>l'entraide tu pratiqueras</li>
				<li>ta curiosité tu aiguiseras</li>
				<li>ta connaissance constamment tu élargiras</li>
				<li>dans tes recherches, méthodique tu seras</li>
				<li>ces règles tu appliqueras</li>
				<li>le matériel tu respecteras</li>
			</ul>
		</div>	
	</div>
	<form action="db.php" method="post" class="form-study">
		  <div class="form-study padLabel">
		    <label for="name">Enter Name: </label>
		    <input type="text" name="name" id="name" required>
		  </div>
		  <div class="form-study padButton">
		    <input type="submit" name="sign" value="Sign!">
		  </div>
		</form>
		<div class="allNames">
<?php
//Connexion à la base de données
try {
    $dbh = new PDO("mysql:host=localhost;dbname=nom_signataire", "root", "root");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$result = $dbh->query('SELECT nom FROM infos_tbl ORDER BY ID DESC LIMIT 0, 22');

while($donnees = $result->fetch())
{
	echo '<p>'.htmlspecialchars($donnees['nom']).'</p>';
}


?>
</div>

	
</body>
</html>
