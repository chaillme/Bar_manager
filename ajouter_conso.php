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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Consommation pour <?php echo $name; ?></title>
</head>
<body>
    <h1>Ajouter Consommation pour <?php echo $name; ?></h1>
    <form action="process.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <label for="drink">Boisson:</label>
        <input type="text" id="drink" name="drink" required><br>
        <label for="quantity">Quantité:</label>
        <input type="number" id="quantity" name="quantity" required><br>
        <label for="price">Prix par unité:</label>
        <input type="number" id="price" name="price" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
