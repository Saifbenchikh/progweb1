<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Web - Résultat Devinette</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Le jeu de la devinette</h1>
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
            <h2>Résultat</h2>
            
            <?php
            $nombre_mystere = 42;
            
            if (isset($_POST['nombre'])) {
                $essai = (int)$_POST['nombre'];
                
                if ($essai < $nombre_mystere) {
                    echo "<p>Votre nombre (" . $essai . ") est trop petit !</p>";
                } elseif ($essai > $nombre_mystere) {
                    echo "<p>Votre nombre (" . $essai . ") est trop grand !</p>";
                } else {
                    echo "<p>Exact ! Vous avez trouvé le nombre mystère (" . $nombre_mystere . ").</p>";
                }
            } else {
                echo "<p>Aucun nombre n'a été soumis.</p>";
            }
            ?>
            
            <br>
            <a href="devinette.html" class="btn" style="display: inline-block; text-decoration: none;">Rejouer</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 - Projet Web Étudiant</p>
        <p><a href="contact.html">Nous contacter</a></p>
    </footer>
</body>
</html>