<?php include('sidebar.php'); ?>
<?php include "db_conn.php"; ?>

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
    <div class="card">
        <div class="card-header">
            <?php
            if (isset($_GET["msg"])) {
                $msg = $_GET["msg"];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">' .
                    $msg . 
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            ?>
            <h4>User List
                <a href="users-create.php" class="btn btn-primary btn-sm float-end">Aggiungi utente</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Operazioni</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["Id"] ?></td>
                            <td><?php echo $row["nome"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["telefono"] ?></td>
                            <td><?php echo $row["ruolo"] ?></td>
                            <td>
                                <a href="users-edit.php?id=<?php echo $row["Id"] ?>" class="btn btn-success btn-sm">Modifica</a>
                                <a href="users-delete.php?id=<?php echo $row["Id"] ?>" class="btn btn-danger btn-sm mx-2">Cancella</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


<?php include('footer.php'); ?>
