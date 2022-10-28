<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

try{
    $conn = new PDO( dsn: "mysql:host=sql12.freesqldatabase.com;dbname=sql12529693;charset=utf8;", username: 'sql12529693', password: 'KqcyYuufFI');

    if (empty($_POST['username'])) exit("Поле не заполнено");
    if (empty($_POST['login'])) exit("Поле не заполнено");
    if (empty($_POST['password'])) exit("Поле не заполнено");

    $query = "INSERT INTO clients VALUES (NULL, :username, :login, :password)";
    $msg = $conn->prepare($query);
    $msg->execute(['username' => $_POST['username'], 'login'=>$_POST['login'], 'password'=>$_POST['password']]);

    header("Location: ../index.php");
}
catch (PDOException $e){
    echo "error" .$e->getMessage();
}
?>