<?php 
session_start(); 
include ("db_conn.php");

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: index.php?error=Email è richiesto!");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password è richiesto!");
        exit();
    } else {
        // Usa password hash
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // Verifica password
            if (password_verify($pass, $row['password'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['id'] = $row['id'];
                header("Location: gestionale2\dashboard.php"); 
                exit();
            } else {
                header("Location: index.php?error=Indirizzo email o password errati!");
                exit();
            }
        } else {
            header("Location: index.php?error=Email utente o password errati!");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
