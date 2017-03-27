<?php
session_start();
include_once("business.php");
$login=$_SESSION['login'];
$fotos=get_profil_fotos($login);
    foreach ($fotos as $foto) {
     uninstall_profil_fotos($login,$foto);
 }
 header('Location: profil_view.php');
        exit();
?>