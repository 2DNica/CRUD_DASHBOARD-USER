<?php
ob_start(); // Inizia il buffer di output

include('sidebar.php');
include "db_conn.php";

if (isset($_POST["submit"])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $ruolo = $_POST['ruolo'];

    // Esegui la query di inserimento
    $sql = "INSERT INTO `users`(`nome`, `email`, `password`, `telefono`, `ruolo`) VALUES ('$nome','$email','$password','$telefono','$ruolo')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: users.php?msg=Nuovo record creato con successo!");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

ob_end_flush(); // Termina e pulisce il buffer di output
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
                    Aggiungi Utente
                    <a href="users.php" class="btn btn-danger float-end"> Indietro </a>
                </h4>
            </div>
            <div class="card-body">
                <form action="users-create.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Indirizzo e-mail</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Seleziona Ruolo</label>
                                <select name="ruolo" class="form-select">
                                    <option value="">Seleziona Ruolo</option>
                                    <option value="admin">Amministratore</option>
                                    <option value="user">Utente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>IS ban</label>
                                <br>
                                <input type="checkbox" name="is_ban" style="width:25px; height:25px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br />
                                <button type="submit" name="submit" class="btn btn-primary">Salva</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
include('footer.php');
?>
