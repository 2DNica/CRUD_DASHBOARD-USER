<?php
session_start();
include('db_conn.php');

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $logged_in_user_id = $_SESSION['id'];

    // Impedisci agli amministratori di cancellare se stessi
    if ($user_id == $logged_in_user_id) {
        header("Location: users.php?error=Non puoi cancellare te stesso!");
        exit();
    }

    // Query di cancellazione
    $query = "DELETE FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: users.php?msg=Utente cancellato con successo");
    } else {
        header("Location: users.php?error=Errore nella cancellazione dell'utente");
    }
}
?>
