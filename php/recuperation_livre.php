<?php 
$host = 'localhost';
$dbname = 'mabiblio';
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

try {
    $query = "SELECT * FROM books"; // Remplace 'livres' par le nom de ta table
    $stmt = $pdo->query($query);
    $livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
echo "Erreur recuperation livre : " . $e->getMessage();
}

?>