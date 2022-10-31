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
$classWorkProgress = ($controller==="User" && $method ==="workProgress")?"nav-link active":"nav-link";
$classNewsletters = ($controller==="User" && $method ==="newsletters")?"nav-link active":"nav-link";
$classAboutProject = ($controller==="User" && $method ==="aboutProject")?"nav-link active":"nav-link";

?>
<div class="container-logo col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-2 m-auto p-0">
	<img src="Assets/img/logos/color.png" class="d-block w-50 m-auto" id="img-logo" alt="logo">
</div>
<div class="container-menu-top col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-10 p-0">
	<div class="row ">
		<div class="d-flex flex-row-reverse">
			<?php include_once('Views/Layouts/navUser.php') ?>
		</div>
	</div>
	<div class="row">
		<nav class="navbar-center navbar navbar-expand-lg col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarPage">
					<div class="navbar-nav nav-center">
						<a class="<?php echo $classInicio ?>" href="<?php echo '?'.base64_encode('class=User&method=index&fecha='.date("Y-m-d H:i:s")) ?>">inicio</a>
						<a class="<?php echo $classWorkProgress ?>" href="<?php echo '?'.base64_encode('class=User&method=workProgress&fecha='.date("Y-m-d H:i:s")) ?>">Avance de obra</a>
						<a class="<?php echo $classNewsletters ?>" href="<?php echo '?'.base64_encode('class=User&method=newsletters&fecha='.date("Y-m-d H:i:s")) ?>">Boletines y comunicados</a>
						<a class="<?php echo $classAboutProject ?>" href="<?php echo '?'.base64_encode('class=User&method=aboutProject&fecha='.date("Y-m-d H:i:s")) ?>">Acerca del proyecto</a>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>