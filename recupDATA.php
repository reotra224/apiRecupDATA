<?php 
// on définit le format du resultat comme JSON
header("Content-Type: application/json; charset=UTF-8");

//On extract les données reçu et on les sécurises
extract($_GET);
$filiere = htmlentities($filiere);
$niveau = htmlentities($niveau);
$promotion = htmlentities($promotion);

//On se connect à la base de données
include_once("connexion.php");

// on prépare la requête
$sql = "SELECT * FROM etudiants WHERE filiere='$filiere' 
        AND niveau='$niveau'
        AND promotion=$promotion";

// on exécute la requête
$resultat = $conn->query($sql);

// S'il y a un resultat,
if ($resultat->rowCount() > 0) {
    // On le convertit en JSON et on l'affiche.
    echo(json_encode($resultat->fetchAll(PDO::FETCH_ASSOC)));
}
else { // Sinon, on affiche null.
    $resultat = "null";
    echo (json_encode($resultat));
}

$conn = null;

?>