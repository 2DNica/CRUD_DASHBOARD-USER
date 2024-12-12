<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Dimenticato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

                            <h2>Dimenticato la password?</h2>
                            <p>Ti verrà inviata un'e-mail con le istruzioni su come reimpostare la password.</p>
                            <br>
                            <form method="post" action="send-password-reset.php">

                                <label for="email">Inserisci la tua email </label>
                                <input type="email" name="email" id="email">
                                <button>Invia </button>

                            </form>
                            <?php
                            if (isset($_GET['reset'])) {
                                if (isset($_GET['reset']) == 'success') {
                                    echo '<p class="successo">Controlla la tua posta elettronica</p>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="index.js"> </script>

</body>

</html>