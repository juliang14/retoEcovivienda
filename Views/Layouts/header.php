<?php  

$class = (empty($_REQUEST['class']))?0:$_REQUEST['class'];
$method = (empty($_REQUEST['method']))?0:$_REQUEST['method'];

$classInicio = ($class == "Index" && $method == "index"? "nav-link active" : "nav-link");
$classEventos = ($class==="Eventos" && $method ==="Eventos")?"nav-link active":"nav-link";
$classAcerca = ($class==="Index" && $method ==="acercaDeNosotros")?"nav-link active":"nav-link";
$classContactos = ($class==="Index" && $method ==="contactos")?"nav-link active":"nav-link";

?>
<div class="container-logo col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-2 m-auto p-0">
	<img src="Assets/img/Logo.jpeg" class="d-block m-auto" id="img-logo" alt="logo">
</div>
<div class="container-menu-top col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-10 p-0">
	<div class="row ">
		<div class="d-flex flex-row-reverse">
			<nav class="navbar-top navbar navbar-expand-lg">
				<div class="container-fluid">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<form class="d-flex nav-link form-search" role="search">
								<input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
								<button class="btn btn-outline-secondary" type="submit">IR</button>
							</form>
							<a class="nav-link" href="?class=security&method=loginEmpleado">
								<button type="button" class="btn">
									<i class="fas fa-user"></i>
								</button>
							</a>
							<a class="nav-link" href="?class=security&method=loginAdministrador">
								<button type="button" class="btn">    
									<i class="fas fa-user-secret"></i>
								</button>
							</a>
							<a class="nav-link" href="?class=security&method=loginUsuario">
								<button type="button" class="btn btn-dark">
									<i class="fa-solid fa-user"></i>
									Iniciar sesion
								</button>
							</a>
							<a class="nav-link" href="?class=security&method=formularioRegistro">
								<button type="button" class="btn btn-dark">
									<i class="fa-solid fa-file-pen"></i>
									Registro
								</button>
							</a>
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
						<a class="<?php echo $classInicio ?>" aria-current="page" href="?class=Index&method=index">INICIO</a>
						<a class="<?php echo $classEventos ?>" href="?class=Eventos&method=Eventos">EVENTOS</a>
						<a class="<?php echo $classAcerca ?>" href="?class=Index&method=acercaDeNosotros">ACERCA DE NOSOTROS</a>
						<a class="<?php echo $classContactos ?>" href="?class=Index&method=contactos">CONTACTENOS</a>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>