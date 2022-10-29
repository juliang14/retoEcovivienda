<?php

class UserController extends User{

    //Page login 
	public function index(){
		require_once('views/User/index.php');
    }

    //Page login 
	public function workProgress(){
		require_once('views/User/workProgress.php');
    }

    //Page login 
	public function newsletters(){
		require_once('views/User/newsletters.php');
    }

    //Page login 
	public function aboutProject(){
		require_once('views/User/aboutProject.php');
    }

}