<div id="DashboardSidebar" class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
    <div id="DashboardTituloContainer" class="container">
        <a href="/" class="mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <p id="DashboardTitulo" class="fs-4">Snackbar</p>
        </a>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a id="DashboardLink" href="dashboard" class="nav-link text-white" aria-current="page">
                <i id="DashboardIcon" class="fa-solid fa-house"></i>
                <span id="DashboardItem">Dashboard</span>
            </a>
        </li>
        <li>
            <a id="DashboardLink" href="produtos" class="nav-link text-white">
                <i id="DashboardIcon" class="fa-solid fa-utensils"></i>
                <span id="DashboardItem">Produtos</span>
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://avatars.githubusercontent.com/u/24421055?s=400&v=4" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>
                <?php
                if (isset($_SESSION['nome'])) {
                    echo $_SESSION['nome'];
                }
                ?>
            </strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li> -->
            <li><a class="dropdown-item" href="logout">Sair</a></li>
        </ul>
    </div>
</div>