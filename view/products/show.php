<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit Détails</title>
</head>
<body>
    <h1>Détails du produit</h1>
    <p>Nom: <?= htmlspecialchars($product['nom']); ?></p>
    <p>Description: <?= htmlspecialchars($product['description']); ?></p>
    <p>Prix: <?= htmlspecialchars($product['prix']); ?> €</p>
</body>
</html>
