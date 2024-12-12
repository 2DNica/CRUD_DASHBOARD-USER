<?php
session_start();
include ('sidebar.php');
include('db_conn.php');

// Recupera l'ID dell'utente loggato
$user_id = $_SESSION['id'];

// Recupera i dati dell'utente dal database
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Aggiorna i dati dell'utente
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $update_query = "UPDATE users SET nome = '$nome', email = '$email', telefono = '$telefono' WHERE id = $user_id";
    mysqli_query($conn, $update_query);

    // Ricarica la pagina per mostrare i dati aggiornati
    header("Location: profile.php");
    exit();
}
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profilo Utente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container py-5 min-vh-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-0 shadow">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-sm-6 text-center py-5">
                            <h3 class="font-weight-bold">Profilo Utente</h3>
                            <form action="profile.php" method="post">
                                <div class="form-group">
                                    <label for="inputNomeForm">Nome</label>
                                    <div class="col-8 col-sm-12 col-md-10 mx-auto">
                                        <input type="text" class="form-control" id="inputNomeForm" name="nome" value="<?php echo $user['nome']; ?>" required>
                                        <div class="invalid-feedback">Ops, il nome è obbligatorio</div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmailForm">Email</label>
                                    <div class="col-8 col-sm-12 col-md-10 mx-auto">
                                        <input type="email" class="form-control" id="inputEmailForm" name="email" value="<?php echo $user['email']; ?>" required>
                                        <div class="invalid-feedback">Ops, l'email è obbligatoria</div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputTelefonoForm">Telefono</label>
                                    <div class="col-8 col-sm-12 col-md-10 mx-auto">
                                        <input type="text" class="form-control" id="inputTelefonoForm" name="telefono" value="<?php echo $user['telefono']; ?>" required>
                                        <div class="invalid-feedback">Ops, il telefono è obbligatorio</div>
                                    </div>
                                </div>

                                <div class="form-group justify-content-center">
                                    <div class="pb-3 pt-3">
                                        <button type="submit" class="btn btn-danger rounded-pill">Salva Modifiche</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
