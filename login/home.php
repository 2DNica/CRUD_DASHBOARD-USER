<?php
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['password'])) {

?>

     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" href="style.css">
     </head>

     <body>
          <h1>Benvenuto, <?php echo $_SESSION['name']; ?></h1>
          <a href="logout.php">Logout</a>
     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>