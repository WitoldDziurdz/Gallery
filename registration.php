<?php 
session_start();
if (isset($_SESSION['zalogowany']))
    {
        header('Location: galeria.php');
        exit();
    }
require("business.php");
$login=$_POST['login'];
$password=$_POST['password'];
$password_double=$_POST['password_double'];
$password=md5($password);
$password_double=md5($password_double);
$mail=$_POST['mail'];
$query = ['login' => $login];
$login_buf=get_login($query);
if (isset($_SESSION['zalogowany']))
	{
		header('Location: galeria.php');
		exit();
	}
if($login) {   
 if ($password!=$password_double)
    {     	
     	$text="Hasło i powturz hasłó  nie są jednakowe.";
	}
else if($login_buf['login']==$login)
	{
     $text="Dany login jest zajęty, sprubuj inny.";
	}
else{	
    $text= "Zostaleś zarejstrowany";
   $profils = [
                        'login' => $login,
                        'password' => $password,
                        'mail' => $mail,
                                       ];
    save_login($profils);
    $profils=get_logins();
     }
 }
 include_once("views/registration_view.php");   
?>