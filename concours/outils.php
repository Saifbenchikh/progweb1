<?php

/**
 * Initialise et configure la connexion à la base de données MySQL via PDO.
 * Cette fonction récupère les identifiants de connexion depuis les variables 
 * d'environnement (avec des valeurs de secours par défaut). Elle configure 
 * également l'instance PDO pour lever des exceptions en cas d'erreur SQL 
 * et pour retourner des tableaux associatifs par défaut lors des extractions (fetch).
 * @return PDO Une instance configurée de l'objet PDO prête à l'emploi.
 * @throws Exception Si la connexion à la base de données échoue.
 */
function connexionBdd() {
    // Informations à propos du serveur de base de données
    $host = getenv('DB_CONCOURS_HOST') ?: '127.0.0.1';
    $port = getenv('DB_CONCOURS_PORT') ?: '3306';
    $db   = getenv('DB_CONCOURS_NAME') ?: 'concours';
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

    // Informations à propos du compte permettant de gérér la base de données
    $user = getenv('DB_CONCOURS_USER') ?: 'usr_concours';
    $pass = getenv('DB_CONCOURS_PASS') ?: 'secret_password';

    try {
        $pdo = new PDO($dsn, $user, $pass);
        // Quand une erreur survient, PDO génère une exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Par défaut, un fetch retournera un tableau associatif
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (Exception $e) {
        throw new Exception("Connexion impossible à la base de données : " . $e->getMessage());
    }
}