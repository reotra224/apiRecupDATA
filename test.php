<form action="recupDATA.php" method="get">
    <div>        
        <label for="filiere">Filière: </label>
        <input type="text" name="filiere" id="filiere">
    </div>
    <div>        
        <label for="niveau">Niveau: </label>
        <input type="text" name="niveau" id="niveau">
    </div>
    <div>        
        <label for="promotion">Promotion</label>
        <input type="text" name="promotion" id="promotion">
    </div>
    <button type="submit">Envoyer</button>
</form>



<?php

/*
if (isset($_GET)) {
    extract($_GET);    
}

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//extract($_POST);

//header("Content-Type: application/json; charset=UTF-8");
//$obj = json_decode($_GET["x"], false);

$conn = new mysqli("localhost", "estm", "estm", "bd_etablissement");

$stmt = $conn->prepare("SELECT matricule,nom,prenom,photo FROM etudiants 
    WHERE niveau=$niveau AND filiere=$filiere AND promotion=$promotion");

$result = $stmt->execute();

$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
*/

?>