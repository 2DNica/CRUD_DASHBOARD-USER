<?php
$servername = "localhost";
$username = "root"; 
$password = ""; //
$dbname = "gestionale2"; // Cambia questo con il nome del tuo database

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


