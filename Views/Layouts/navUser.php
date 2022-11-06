<nav class="navbar">
    <div class="container-fluid">
        <p class="text-name-user"><?php echo $_SESSION['UserAutenticate']->NOMBRE; ?></p>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" id="icon-user">
            <i class="fas fa-user text-primary"></i>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close">                    
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            <i class="fa-solid fa-id-badge"></i> Perfil
                        </a>
                        <a class="nav-link" aria-current="page" href="#">
                            <i class="fa-sharp fa-solid fa-receipt"></i> 
                            Solicitudes
                        </a>
                        <a class="nav-link" aria-current="page" href="<?php echo '?'.base64_encode('class=User&method=sessionChangePassword&fecha='.date("Y-m-d H:i:s")) ?>">
                            <i class="fa-sharp fa-solid fa-key"></i> 
                            Cambiar clave
                        </a>
                        <a class="nav-link" aria-current="page" href="<?php echo '?'.base64_encode('class=Security&method=closeSesion&fecha='.date("Y-m-d H:i:s")) ?>">
                            <i class="fa-solid fa-right-from-bracket"></i> 
                            Cerrar sesion
                        </a>
                    </li>
            </div>
        </div>
    </div>
</nav>
