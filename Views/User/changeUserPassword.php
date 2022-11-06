<?php 
$url = $_SERVER['HTTP_HOST']==='localhost'?'http://'.$_SERVER['HTTP_HOST']:$_SERVER['HTTP_HOST'];
$url = $url.$_SERVER["REQUEST_URI"];
$requestUri = $_SERVER["REQUEST_URI"];
$decodeParams = explode("?",$requestUri);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cambiar contraseña</title>

        <link rel="shortcut icon" href="assets/img/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="assets/utils/bootstrap/bootstrap-5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/utils/fontawesome/fontawesome-free-6.1.2-web/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/utils/swiper/css/swiper-bundle.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
        <link rel="stylesheet" type="text/css" href="assets/css/general.css">
    </head>
    <body class="container-body container">

        <header class="header row" id="header">
            <?php include_once('Views/Layouts/header.php') ?>
        </header>
        <main class="main row m-auto">
            <h1 class="tittle-login text-center mt-4 mb-4">
                <span>Cambio de contraseña</span>
            </h1>
            <form class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 m-auto p-0" action="<?php echo '?'.base64_encode('class=Security&method=changeUserPasswordSession&fecha='.date("Y-m-d H:i:s")) ?>" method="post">
                <input type="hidden" name="link" value="<?php echo '?'.$decodeParams[1]?>">
                <input type="hidden" name="email" value="<?php echo $_SESSION['UserAutenticate']->EMAIL; ?>">
                <input type="hidden" name="url" value="<?php echo $url?>">
                <label for="password" class="form-label">Contraseña</label>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-4 input-group">
                    <input type="password" name="password" class="form-control" id="password" minlength="8" maxlength="10" required>
                    <span class="input-group-text btn-password">
                    <i class="fa-solid fa-eye" id="togglePassword" ></i>
                    </span>
                </div>
                <label for="confirm-password" class="form-label">Confirmar contraseña</label>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-4 input-group">
                    <input type="password" name="confirm-password" class="form-control" id="confirm-password" minlength="8" maxlength="10" required>
                    <span class="input-group-text btn-confirm-password">
                    <i class="fa-solid fa-eye" id="toggle-confirm-password" ></i>
                    </span>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 m-auto">
                    <button type="submit" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 btn btn-primary mb-5">ENVIAR</button>
                </div>
            </form>
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