<?php
session_start();
include_once("business.php");
include_once("12.php");
$profils=get_logins();
$fotos=get_fotos();
$name=get_profil_fotos($login);
    foreach ($profils as $profil) {
     echo $profil['login'] . '<br/>';
     echo $profil['password'] . '<br/>';
     uninstall_logins($profils);
 }
    foreach ($fotos as $foto) {
     echo $foto['name']."\t";
     echo $foto['author']."\t";
     uninstall_fotos($foto);
     
 }
header('Location: registration.php');
exit;
?>