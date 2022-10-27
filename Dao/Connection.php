<?php
 // PDO::ATTR_ERRMODE
 // PDO::ERRMODE_EXCEPTION
class Connection{

	public static function conectDatabase(){
		try {
			$pdoBase = new PDO('mysql:host=localhost;dbname=ecovienda;charset=utf8','root','root');
			$pdoBase->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
			return $pdoBase;		
		}catch (Exception $e) {
			/*die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();*/
			$_SESSION['message-login']='Error al conectarse con el servidor';
			$_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
            header('location:/retoEcovivienda/');
		}finally{
			//$pdoBase= null;
		}
	}

}

?>