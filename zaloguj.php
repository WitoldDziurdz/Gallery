<?php 
session_start();
require_once("business.php");
require_once("function.php");
  if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
  {
     header('Location: galeria.php');
     exit();
  }
  else
  {
    $login_g=$_POST['login'];
    $password_g=$_POST['password'];
    $password_g=md5($password_g);
    $login_g=sanitize_string($login_g);
    $query_login_g = ['login' => $login_g];
    $login_buf=get_login($query_login_g);

    if(($login_g==$login_buf['login'])&&($password_g==$login_buf['password']))
    {
      $_SESSION['zalogowany']=true;
      $_SESSION['id'] = $login_buf['_id'];
      $_SESSION['login'] = $login_buf['login'];
      header('Location: galeria.php');
      exit();
    }
    else
    {
      $text_login="Niepoprawny login albo hasło.";
    }
  }
include_once("galeria.php");

 ?>

