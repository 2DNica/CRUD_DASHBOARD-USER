<?php 
ob_start(); // Inizia il buffer di output     **si usa per errori dei spazzi vuoti
include('sidebar.php');
include 'db_conn.php';

$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $ruolo = $_POST['ruolo'];

    $sql = "UPDATE `users` SET `nome`='$nome', `email`='$email', `password`='$password', `telefono`='$telefono', `ruolo`='$ruolo' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: users.php?msg=Dati aggiornati con successo!");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

// Recupera i dati dell'utente per precompilare il form
$sql = "SELECT * FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="main">
    <a href="#" class="theme-toggle">
        <i class="fa-regular fa-moon"></i>
        <i class="fa-regular fa-sun"></i>
    </a>
    <!-- BAR NAV  -->
    <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                        <img src="assets/images/icon-profile.png" class="avatar img-fluid rounded" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="users.php" class="dropdown-item">Profilo</a>
                        <a href="#" class="dropdown-item">Impostazioni</a>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- FINE NAVIGAZIONE BAR  -->

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>
                    Modifica Utente
                    <a href="users.php" class="btn btn-danger float-end"> Indietro </a>
                </h4>
            </div>
            <div class="card-body">
                <form action="users-edit.php?id=<?php echo $id; ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" value="<?php echo $row['nome']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Indirizzo e-mail</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="text" name="telefono" class="form-control" value="<?php echo $row['telefono']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Ruolo</label>
                                <select name="ruolo" class="form-select">
                                    <option value="admin" <?php echo $row['ruolo'] == 'admin' ? 'selected' : ''; ?>>Amministratore</option>
                                    <option value="user" <?php echo $row['ruolo'] == 'user' ? 'selected' : ''; ?>>Utente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <button type="submit" name="submit" class="btn btn-primary">Modifica</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include('footer.php'); ?>
<?php ob_end_flush(); // Termina e pulisce il buffer di output ?>
