<?php

class MailController extends Mail{

    public function validateEmail(){
        if (isset($_REQUEST['email'])){
            $dataUser = Mail::getUserEmail($_REQUEST['email']);
            if(!$dataUser){
                $_SESSION['message-login']='El correo no existe';
                $_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
                header('location:/retoEcovivienda/');
            }else{
                $url = $_SERVER['HTTP_HOST']==='localhost'?'http://'.$_SERVER['HTTP_HOST']:$_SERVER['HTTP_HOST'];
                $link = $url.'/retoEcovivienda/?'.base64_encode('class=User&method=changePassword&id='.$dataUser->ID.'&email='.$dataUser->EMAIL.'&fecha='.date("Y-m-d H:i:s"));
                Mail::sendEmail('ENVIAR', $_REQUEST['email'], $link);
                require_once('views/Mail/sendEmail.php');
                $_SESSION['message-login']='Hemos enviado un link al correo '.$_REQUEST['email'].' para que finalices el proceso.';
                $_SESSION['icon-message']='<i class="text-success fs-1 fa-solid fa-circle-check"></i>';
                header('location:/retoEcovivienda/');
            }
        }else{
            $_SESSION['message-login']='Por favor verifica el correo';
			$_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/');
        }
    }

}