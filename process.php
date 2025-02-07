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

// Récupérer les données du formulaire
$name = $_POST['name'];
$drink = $_POST['drink'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total = $quantity * $price;

// Insérer les données dans la base de données
$sql = "INSERT INTO consommations (name, drink, quantity, total) VALUES ('$name', '$drink', $quantity, $total)";
if ($conn->query($sql) === TRUE) {
    echo "Nouvelle consommation ajoutée avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Rediriger vers la page principale
header("Location: personnes.html");
exit();
?>
