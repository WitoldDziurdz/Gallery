<?php 
include_once("business.php");
function uninstall_logins($var)
{
    $db = get_db();
    return $db->logins->remove($var);
}
function uninstall_fotos($var)
{
$db = get_db();
    return $db->persons->remove($var);
}

function uninstall_profil_fotos($login,$var)
{
	$db = get_db();
	return $db->$login->remove($var);
}
?>

     