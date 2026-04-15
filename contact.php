<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Web - Confirmation de Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Demande envoyée</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="quiz.html">Quiz</a></li>
            <li><a href="devinette.html">Devinette</a></li>
        </ul>
    </nav>
    <main>
        <section class="card">
            <h2>Récapitulatif de votre demande</h2>
            
            <?php
            if (isset($_GET['pseudo']) && isset($_GET['email']) && isset($_GET['categorie'])) {
                $pseudo = htmlspecialchars($_GET['pseudo']);
                $email = htmlspecialchars($_GET['email']);
                $categorie = htmlspecialchars($_GET['categorie']);
                $newsletter = isset($_GET['newsletter']) ? htmlspecialchars($_GET['newsletter']) : 'non';
                $frequence = isset($_GET['frequence']) ? htmlspecialchars($_GET['frequence']) : 'aucune';

                echo "<p><strong>Pseudo :</strong> " . $pseudo . "</p>";
                echo "<p><strong>Email :</strong> " . $email . "</p>";
                echo "<p><strong>Catégorie :</strong> " . $categorie . "</p>";
                echo "<p><strong>Newsletter :</strong> " . $newsletter . "</p>";
                
                if ($newsletter === 'oui' && $frequence !== '') {
                    echo "<p><strong>Fréquence :</strong> " . $frequence . "</p>";
                }

                echo "<h3>Lien suggéré</h3>";
                
                if ($categorie === 'quiz') {
                    echo "<p>Puisque vous vous intéressez au quiz, allez vite le tester : <a href='quiz.html'>Aller au Quiz</a></p>";
                } elseif ($categorie === 'devinette') {
                    echo "<p>Prêt à jouer ? C'est par ici : <a href='devinette.html'>Aller à la Devinette</a></p>";
                } else {
                    echo "<p>Retournez sur notre page principale : <a href='index.html'>Retour à l'accueil</a></p>";
                }
            } else {
                echo "<p>Erreur : aucune donnée reçue.</p>";
            }
            ?>
            
        </section>
    </main>
    <footer>
        <p>&copy; 2026 - Projet Web Étudiant [cite: 29]</p>
        <p><a href="contact.html">Nous contacter</a></p>
    </footer>
</body>
</html>