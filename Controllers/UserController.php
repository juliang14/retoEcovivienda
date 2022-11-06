<?php

class UserController extends User{

    //Page login 
	public function index(){
    Security::validate();
		require_once('views/User/index.php');
  }

    //Page login 
	public function workProgress(){
    Security::validate();
		require_once('views/User/workProgress.php');
  }

    //Page login 
	public function newsletters(){
    Security::validate();
		require_once('views/User/newsletters.php');
  }

    //Page login 
	public function aboutProject(){
    Security::validate();
		require_once('views/User/aboutProject.php');
  }

  public function sessionChangePassword(){
    Security::validate();
		require_once('views/User/changeUserPassword.php');
  }

  public function changePassword(){
		require_once('views/User/changePassword.php');
  }

}