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

$name = $_GET['name'];

$sql = "SELECT drink, quantity, total FROM consommations WHERE name='$name'";
$result = $conn->query($sql);
$totalAmount = 0;

if ($result->num_rows > 0) {
    echo "<h1>Addition pour $name</h1>";
    echo "<table border='1'><tr><th>Boisson</th><th>Quantité</th><th>Total</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["drink"]."</td><td>".$row["quantity"]."</td><td>".$row["total"]."</td></tr>";
        $totalAmount += $row["total"];
    }
    echo "<tr><td colspan='2'><strong>Montant Total:</strong></td><td><strong>$totalAmount €</strong></td></tr></table>";
} else {
    echo "<h1>Aucune consommation trouvée pour $name</h1>";
}

$conn->close();
?>
