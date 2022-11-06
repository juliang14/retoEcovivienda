<?php

class SecurityController extends Security{

    //Page login 
	public function index(){
		require_once('views/Security/login.php');
        unset($_SESSION['UserAutenticate']);
        session_destroy();
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

    public function changePassword(){

        if ($_REQUEST['password'] === $_REQUEST['confirm-password']) {
            Security::changePasswordUser($_POST['email'], $_POST['password']);
            $_SESSION['message-login']='Contraseña actualizada.';
            $_SESSION['icon-message']='<i class="text-success fs-1 fa-solid fa-circle-check"></i>';
            Mail::sendEmail('EXPIRAR', $_POST['email'], $_POST['url']);
            header('location:/retoEcovivienda/');
        } else {
            $_SESSION['message-login']='Las contraseñas no coinciden';
            $_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/'.$_REQUEST['link']);
        }
    }

    public function changeUserPasswordSession(){

        if ($_REQUEST['password'] === $_REQUEST['confirm-password']) {
            Security::changePasswordUser($_POST['email'], $_POST['password']);
            $_SESSION['message-login']='Contraseña actualizada.';
            $_SESSION['icon-message']='<i class="text-success fs-1 fa-solid fa-circle-check"></i>';
            header('location:/retoEcovivienda/');
        } else {
            $_SESSION['message-login']='Las contraseñas no coinciden';
            $_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/'.$_REQUEST['link']);
        }
    }

    public function closeSesion(){
        unset($_SESSION['UserAutenticate']);
        session_destroy();
        header('location:/retoEcovivienda/');
    }
}