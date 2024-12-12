<?php
$servername = "localhost";
$username = "root"; // Cambia questo con il tuo nome utente del database
$password = ""; // Cambia questo con la tua password del database
$dbname = "gestionale2"; // Cambia questo con il nome del tuo database

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>
