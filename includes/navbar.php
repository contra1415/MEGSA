<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">MEGSA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" ><?php $navbaruser = $_SESSION['username'];echo $navbaruser; ?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="main.php">Main <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Buscar Pacientes</a>
                    <a class="dropdown-item" href="add_client.php">Agregar Pacientes</a>
                    <a class="dropdown-item" href="#">Confirmar Cita</a>
                    <a class="dropdown-item" href="clients.php">Listar Pacientes</a>
                </div>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sistema</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="users.php">Usuarios</a>
                    <a class="dropdown-item" href="includes/logout.php">Salir</a>
                </div>
            </li>
        </ul>
    </div>
</nav>