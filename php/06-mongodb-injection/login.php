<!DOCTYPE html>
<html>
<head>
    <title>MongoDB Injection</title>
</head>
<body>

<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $db = get_db();

    $query = [
        'login' => $_POST['login'],
        'password' => $_POST['password']
    ];

    $user = $db->users->findOne($query);

    if ($user) {
        echo "Zalogowany!\n";
    } else {
        echo "Niepoprawny login lub hasło!\n";
    }
}

//poprawne logowanie:
// $ http -v -f POST http://192.168.199.11/wai/php/05-mongodb-injection/login.php 'login=admin' 'password=p@ssw0rd'
//niepoprawne logowanie:
// $ http -v -f POST http://192.168.199.11/wai/php/05-mongodb-injection/login.php 'login=admin' 'password=haslo'
//wstrzyknięcie operatora wyszukiwania w miejsce hasła:
// $ http -v -f POST http://192.168.199.11/wai/php/05-mongodb-injection/login.php 'login=admin' 'password[$ne]=1'
?>

<?php if (empty($user)): ?>
<form method="post">
    <input type="text" name="login"
           placeholder="login"/>

    <input type="password" name="password"
           placeholder="password"/>

    <input type="submit" value="Zaloguj"/>
</form>
<?php endif ?>

</body>
</html>
