<?php
    session_start();

    //llamar modelos
    require_once('Models/Security.php');
    require_once('Models/User.php');

    /*-----------------------------------------------------*/
    // se declara variable $controller = si existe la clase se deja la clase (?), sino(:) deja por default Index
/*    $controller=isset($_REQUEST['class']) ? $_REQUEST['class']: 'Security';
    $method=isset($_REQUEST['method']) ? $_REQUEST['method']: 'index';*/

    $controller = "Security";
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

    // permite requerir un archivo .php en nuestro sitio
    if (!file_exists('Controllers/'.$controller.'Controller.php')){
        $controller = "Security";
        $method     = "index";
    }
    require_once ('Controllers/'.$controller.'Controller.php');

    $controller=$controller.'Controller';

    $class = ucfirst($controller);
    $controller = new $class();
    call_user_func(array($controller,  $method));
?> 