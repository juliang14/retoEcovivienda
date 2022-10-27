<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecovivienda - Login</title>

    <link rel="shortcut icon" href="assets/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="assets/utils/bootstrap/bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/utils/fontawesome/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/utils/swiper/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/utils/swiper/css/swiper.css">
    <link rel="stylesheet" type="text/css" href="Assets/utils/sweetalert2_8.11.8/css/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body class="container-body container">
    <header class="header row" id="header"></header>
    <main class="main row"> 
        <!-- sections -->
        <section class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 m-auto">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 pt-2 pb-5">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10 m-auto text-center">
                        <img class="img-form w-25" src="assets/img/logos/fondo_azul.jpg" alt="img-login"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10 m-auto mt-2 mb-4">
                        <h1 class="tittle-login text-center">
                            &iexcl;Bienvenid@ a<br>
                            <span>Ecovivienda&excl;</span>
                        </h1>
                    </div>
                    <form class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10 m-auto form-login" action="<?php echo '?'.base64_encode('class=Security&method=loginUsuario&fecha='.date("Y-m-d H:i:s")) ?>" method="post">
                        <div class="header-form-login">
                            <nav class="nav text-center">
                                <a class="col-6 nav-link active">C&eacute;dula</a>
                                <a class="col-6 nav-link">Correo</a>
                            </nav>
                        </div>
                        <div class="body-form-login">
                            <div class="row content-login1">
                                <label class="form-label">Identificaci&oacute;n</label>
                                <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                    <label class="off" for=""><i class="bi bi-funnel"></i></label>
                                    <select class="form-select" name="documentType" id="documentType" aria-label="Filter select" required>
                                        <option value="CC">CC - C&eacute;dula de ciudadan&iacute;a</option>
                                        <option value="CE">CC - C&eacute;dula de extranjer&iacute;a</option>
                                        <option value="P01">P01 - Pasaporte</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                    <input type="text" name="document" id="document" class="form-control" placeholder="# ... " required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 off content-login2">
                                <label for="email" class="form-label">Correo</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <label for="password" class="form-label mt-3">Password</label>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-4 input-group">
                                <input type="password" name="password" class="form-control" id="password" required>
                                <span class="input-group-text btn-password">
                                <i class="fa-solid fa-eye" id="togglePassword" ></i>
                                </span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <button class="w-100 btn btn-primary">INGRESAR</button>
                            </div>
                        </div>
                        <div class="footer-form-login mb-2">
                            <nav class="nav text-center">
                                <a class="col-6 nav-link active">Olvid&eacute; mi clave</a>
                                <a class="col-6 nav-link">Registrarme</a>
                            </nav>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 pt-3 pb-5 container-img">
                    <img class="w-100" src="assets/img/logos/color.png" alt="img-login"/>
                    <section class="section-with-carousel section-with-right-offset position-relative">
                        <div class="carousel-wrapper">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <figure>
                                            <img src="assets/img/logos/Escudo_Alcaldia_Vertical.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="swiper-slide">
                                        <figure>
                                            <img src="assets/img/logos/viviendas_que_unen-02.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="swiper-slide">
                                        <figure>
                                            <img src="assets/img/logos/Logo-Tunja-Nos-Une-2020CC-12.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="swiper-slide">
                                        <figure>
                                            <img src="assets/img/logos/Logo_Bella_Vista_1.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-controls">
                            <button class="carousel-control carousel-control-left" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                                <path fill-rule="evenodd" d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.75.75 0 111.06 1.06L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z"></path>
                                </svg>
                            </button>
                            <button class="carousel-control carousel-control-right" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                                <path fill-rule="evenodd" d="M13.22 19.03a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 10-1.06 1.06l4.97 4.97H3.75a.75.75 0 000 1.5h14.44l-4.97 4.97a.75.75 0 000 1.06z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="swiper-pagination"></div>
                    </section>
                </div>
            </div>
        </section>
        <!-- end sections -->   
        <!-- Modal -->
        <div class="modal fade accionEvento" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" onclick="">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                <h5 class="modal-title" id="exampleModalLongTitle">Importante</h5>
                <button type="button" class="close accionEvento" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>
                <!--button type="button" class="btn btn-primary">Save changes</button-->
                </div>
            </div>
            </div>
        </div>
        <!-----------------------   FIN MODAL  ------------------------------------>
    </main>
    <footer class="footer row">
        <div class="version-app">
            <strong>V-0.0.1</strong>
        </div>
    </footer>

    <script type="text/javascript" src="assets/utils/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/utils/bootstrap/bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Assets/utils/sweetalert2_8.11.8/js/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="assets/utils/swiper/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/utils/swiper/js/swiper.js"></script>
    <script type="text/javascript" src="assets/js/login.js"></script>
    <script type="text/javascript">
        <?php if(!empty($_SESSION['message-login'])){ ?>
            message = '<?php echo $_SESSION['message-login'] ?>';
            iconMessage = '<?php echo $_SESSION['icon-message'] ?>';
        <?php unset($_SESSION['message-login']); } ?>
    </script>
</body>
</html>