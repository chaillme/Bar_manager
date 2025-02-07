<?php
$servername = "localhost";
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "suivi_boissons";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT name FROM consommations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td><a href='ajouter_conso.php?name=".$row["name"]."'>Ajouter Consommation</a> | <a href='addition.php?name=".$row["name"]."'>Faire l'Addition</a></td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>Aucune personne trouvée</td></tr>";
}

$conn->close();
?>
