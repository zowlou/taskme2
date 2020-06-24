<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-sm navbar-light">
    
    <!-- logo -->
    <a class="navbar-brand" href="index.php">
        <img class="logo" src="assets/img/logo_taskme.png"  alt="TASKME"> <span class="logo_text"">T<span style="color:#FFDA82;">A</span>SKME</span>
    </a>


    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="task.php" id="active">tâches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="board.php">tableau de bord</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">pseudo</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Adminsitration
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?p=roles">Rôles</a>
                <a class="dropdown-item" href="#">Another action</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">connectez-vous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disconnected" href="#">Déconnectez-vous</a>
            </li>
        </ul>
    </div>
</nav>