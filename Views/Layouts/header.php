<?php  

$controller = "User";
$method     = "index";
$requestUri = $_SERVER["REQUEST_URI"];
$decodeParams = explode("?",$requestUri);

if(isset($_REQUEST['class']) && isset($_REQUEST['method']) ){
    $controller=$_REQUEST['class'];
    $method=$_REQUEST['method'];
}else if(sizeof($decodeParams) > 1){
    $arrayParams = explode("&",base64_decode($decodeParams[1]));
    for ($i=0; $i < sizeof($arrayParams) ; $i++) { 
        $arrayData = explode("=",$arrayParams[$i]);
        if ($arrayData[0]==="class") {
            $controller = $arrayData[1];
        } else if($arrayData[0]==="method") {
            $method = $arrayData[1];
        }
    }
}
$classInicio = ($controller == "User" && $method == "index"? "nav-link active" : "nav-link");
$classEventos = ($controller==="Eventos" && $method ==="Eventos")?"nav-link active":"nav-link";
$classAcerca = ($controller==="Index" && $method ==="acercaDeNosotros")?"nav-link active":"nav-link";
$classContactos = ($controller==="Index" && $method ==="contactos")?"nav-link active":"nav-link";

?>
<div class="container-logo col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-2 m-auto p-0">
	<img src="Assets/img/logos/color.png" class="d-block w-50 m-auto" id="img-logo" alt="logo">
</div>
<div class="container-menu-top col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-10 p-0">
	<div class="row ">
		<div class="d-flex flex-row-reverse">
			<nav class="navbar-top navbar navbar-expand-lg">
				<div class="container-fluid">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
                            <button type="button" class="btn" id="icon-user">
                                <i class="fas fa-user"></i>
                            </button>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 col-xxl-2"></div>
		<nav class="navbar-center navbar navbar-expand-lg col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 col-xxl-10">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav nav-center">
						<a class="<?php echo $classInicio ?>">INICIO</a>
						<a class="<?php echo $classEventos ?>" href="?class=Eventos&method=Eventos">EVENTOS</a>
						<a class="<?php echo $classAcerca ?>" href="?class=Index&method=acercaDeNosotros">ACERCA DE NOSOTROS</a>
						<a class="<?php echo $classContactos ?>" href="?class=Index&method=contactos">CONTACTENOS</a>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>