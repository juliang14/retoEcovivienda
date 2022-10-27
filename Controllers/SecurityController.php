<?php

class SecurityController extends Security{

    //Page login 
	public function index(){
		require_once('views/Security/login.php');
    }

    public function loginUsuario(){
        if( isset($_REQUEST['email']) && $_REQUEST['email'] !='' ){
            echo 'Login por email. '.$_REQUEST['email'];
            $ResponseAutenticate = Security::authenticateUser('Email', '', $_POST['email'], $_POST['password']);
        }else {
            echo 'Login cedula '.$_REQUEST['email'];
            $ResponseAutenticate = Security::authenticateUser('Cedula', $_POST['documentType'], $_POST['document'], $_POST['password']);
        }

        if(!$ResponseAutenticate){
            $_SESSION['message-login']='Usuario o contraseña incorrectos';
			$_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/');
        }else if($ResponseAutenticate->ROL =='Cliente'){
            $_SESSION['UserAutenticate']=$ResponseAutenticate;
            header('location:?'.base64_encode('class=User&method=index&fecha='.date("Y-m-d H:i:s")));
        }else{
            header('location:/retoEcovivienda/');
        }      
    }

    public static function validate(){
		if(empty($_SESSION['UserAutenticate'])){
			header('location:?class=Security&method=index');
		}
	}

    public function closeSesion(){
        unset($_SESSION['UserAutenticate']);
        session_destroy();
        header('location:?class=Security&method=index');
    }
}