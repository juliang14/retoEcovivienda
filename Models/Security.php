<?php
require_once('Dao/Connection.php');

class Security extends Connection{

	
    public static function validate(){
		if(empty($_SESSION['UserAutenticate'])){
			header('location:/retoEcovivienda/');
		}
	}

	public static function authenticateUser($authorizationType, $documentType, $user,$pass){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_OBTENER_USUARIO_SISTEMA(?,?,?,?)");
			$query->bindParam(1,$authorizationType, PDO::PARAM_STR);
            $query->bindParam(2,$documentType, PDO::PARAM_STR);
			$query->bindParam(3,$user, PDO::PARAM_STR);
            $query->bindParam(4,$pass, PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
            $_SESSION['message-login']=$e->getMessage();
			$_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/');
		}
	}

	public static function changePasswordUser($email,$pass){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_CHANGE_PASSWORD(?,?)");
			$query->bindParam(1,$email, PDO::PARAM_STR);
            $query->bindParam(2,$pass, PDO::PARAM_STR);
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