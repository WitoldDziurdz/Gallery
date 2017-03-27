<?php
function get_db()
{
    $mongo = new MongoClient(
        "mongodb://localhost:27017/",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
            'db' => 'wai',
        ]);

    $db = $mongo->wai;

    return $db;
}
function get_fotos()
{
    $db = get_db();
    return $db->persons->find();
}
function save_product($person)
{
    $db = get_db();
    $db->persons->insert($person);
}
function get_person($name)
{
    $db = get_db();
    return $db->persons->findOne($name);
}
function save_login($login)
{
    $db = get_db();
    $db->logins->insert($login);
}
function get_login($login)
{
    $db = get_db();
    return $db->logins->findOne($login);
}
function get_logins()
{
    $db = get_db();
    return $db->logins->find();
}

function save_profil_foto($login,$name)
{
    $db = get_db();
    $db->$login->insert($name);
}
function get_profil_fotos($login)
{
    $db = get_db();
    return $db->$login->find();
}
function get_profil_foto($login,$name)
{
    $db = get_db();
    return $db->$login->findOne($name);
}
function uninstall_profil_fotos($login,$var)
{
    $db = get_db();
    return $db->$login->remove($var);
}
function search_title($query)
{
    $db = get_db();
    $search = ['title' => new MongoRegex("/$query/i")];
    return $db->persons->find($search);
}

?>