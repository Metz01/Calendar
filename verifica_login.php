<?php
include('connection.php'); // Includi il file di connessione al database

// Verifica se il modulo di accesso è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Esegui la query per verificare le credenziali
    $query = "SELECT * FROM utenti WHERE username = ? AND password = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        // Accesso riuscito, reindirizza a "index.html"
        header("./index.html");
        exit;
    } else {
        // Accesso fallito, mostra un messaggio di errore o reindirizza a una pagina di errore
        header("./login.html");
        exit;
    }
}
?>
