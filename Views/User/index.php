<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="assets/utils/bootstrap/bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/utils/fontawesome/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/utils/swiper/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/general.css">
</head>
<body class="container-body container">

    <header class="header row" id="header">
        <?php include_once('Views/Layouts/header.php') ?>
    </header>
    <main class="main row m-auto">
        <section class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10 m-auto mt-5 mb-5">
            <h1 class="tittle-login">
                &iexcl;Bienvenid@ <span><?php echo $_SESSION['UserAutenticate']->PRIMER_NOMBRE.' '.$_SESSION['UserAutenticate']->PRIMER_APELLIDO; ?>&excl;</span>
            </h1>
            <p class="mt-2 mb-5 p-0">
                En este portal podras encontrar la informacion de tu inmueble
            </p>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 m-auto">
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 card m-auto">
                    <img src="assets/img/render_proyecto_bellavista/1.jpeg" class="card-img-top" alt="proyecto-bellavista">
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border-card-home">
                                <h5 class="card-title m-0 text-center">Bellavista</h5>
                                <p class="card-text pt-5">
                                    <button type="button" class="btn btn-outline-primary btn-sm w-100 btn-bellavista">
                                        <i class="fa-solid fa-images"></i>
                                        Ver detalle 
                                    </button>
                                </p>
                            </div>   
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <h5 class="card-title text-center">Mi inmueble</h5>
                                <p class="card-text text-center">Interior 2 Apto 111</p>
                                <button type="button" class="btn btn-outline-primary btn-sm w-100 btn-apto">
                                    Ver mas 
                                </button>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 m-auto mt-4 mb-5 pt-4 pb-2 border-section-card section-carrousel off">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/3.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/4.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/5.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/6.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/7.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/8.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h6 class="text-name-project-carrousel mt-3 mb-1">Proyecto Bellavista</h6>
            <p id="text-info">Imagenes solamente de referencia</p>
        </section>
        <section class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 m-auto mt-4 mb-5 pt-4 pb-2 border-section-card section-apto off">
            <div id="carouselApto" class="carousel slide carousel-dark carousel-fade" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselApto" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselApto" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/apto2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="assets/img/render_proyecto_bellavista/apto1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselApto" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselApto" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h6 class="text-name-project-carrousel mt-3 mb-1">Información</h6>
            <p id="text-info">Las imagenes solamente son referencia</p>
            <h6 class="text-name-project-carrousel mt-3 mb-1">Caracteristicas</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Piso: 1</li>
                <li class="list-group-item">Baños: 2</li>
                <li class="list-group-item">Habitaciones: 3</li>
                <li class="list-group-item">Área construida: 61.00 m2</li>
                <li class="list-group-item">Área privada: 55.00 m2</li>
            </ul>
        </section>
    </main>
    <footer class="footer row">
        <?php include_once('Views/Layouts/footer.php') ?>
    </footer>

    <script type="text/javascript" src="assets/utils/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/utils/bootstrap/bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Assets/utils/sweetalert2_8.11.8/js/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="assets/js/user.js"></script>
        <script type="text/javascript">
            <?php if(!empty($_SESSION['message-login'])){ ?>
                message = '<?php echo $_SESSION['message-login'] ?>';
                iconMessage = '<?php echo $_SESSION['icon-message'] ?>';
            <?php unset($_SESSION['message-login']); } ?>
        </script>
</body>
</html>