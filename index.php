<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suivi des Consommations</title>
</head>
<body>
    <h1>Suivi des Consommations de Boissons</h1>
    <form action="process.php" method="post">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="drink">Boisson:</label>
        <input type="text" id="drink" name="drink" required><br>
        <label for="quantity">Quantité:</label>
        <input type="number" id="quantity" name="quantity" required><br>
        <label for="price">Prix par unité:</label>
        <input type="number" id="price" name="price" required><br>
        <button type="submit">Ajouter</button>
    </form>
    <h2>Liste des consommations</h2>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Boisson</th>
            <th>Quantité</th>
            <th>Total à payer</th>
        </tr>
        <?php
        // Include file pour récupérer les données
        include 'fetch_data.php';
        ?>
    </table>
</body>
</html>
