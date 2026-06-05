<?php
require_once __DIR__ . '/outils.php';

$db = connexionBdd();

$requete = "SELECT * FROM question";
$resultat = $db->query($requete);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
</head>
<body>
    <h1>Administration du Concours</h1>
    <p>Page de gestion réservée à l'administrateur.</p>

    <h2>Liste de toutes les questions</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Intitulé</th>
                <th>Réponse attendue</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // 3. Affichage des données ligne par ligne
            foreach ($resultat as $l) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($l['id']) . "</td>";
                echo "<td>" . htmlspecialchars($l['intitule']) . "</td>";
                echo "<td>" . htmlspecialchars($l['reponse']) . "</td>";
                echo "<td>" . htmlspecialchars($l['points']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>