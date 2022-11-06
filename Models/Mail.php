<?php
require_once('Dao/Connection.php');

class Mail extends Connection{

    public static function getUserEmail($email){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_GET_MAIL_USER(?)");
			$query->bindParam(1,$email, PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
            $_SESSION['message-login']=$e->getMessage();
			$_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/');
		}
	}

    public static function sendEmail($accion, $email, $link){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_MANNAGE_SEND_MAIL(?,?,?)");
			$query->bindParam(1,$accion, PDO::PARAM_STR);
            $query->bindParam(2,$email, PDO::PARAM_STR);
            $query->bindParam(3,$link, PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
            $_SESSION['message-login']=$e->getMessage();
			$_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/');
		}
	}

}

?>