<?php
ini_set('error_reporting', E_ALL);          //subject, email, name, message
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

try{
    
    $conn = new PDO( dsn: "mysql:host=sql12.freesqldatabase.com;dbname=sql12529693;charset=utf8;", username: 'sql12529693', password: 'KqcyYuufFI');

    if (empty($_POST['subject'])) exit("Поле не заполнено");
    if (empty($_POST['email'])) exit("Поле не заполнено");
    if (empty($_POST['name'])) exit("Поле не заполнено");
    if (empty($_POST['message'])) exit("Поле не заполнено");

    $number ="";
    $query = "INSERT INTO reviews VALUES (NULL, NULL, :topic, :email, :name, :message)";
    $msg = $conn->prepare($query);
    $msg->execute(['topic' => $_POST['subject'], 'email'=>$_POST['email'], 'name'=>$_POST['name'], 'message'=>$_POST['message']]);

   
    
    header("Location: ../index.php");
}
catch (PDOException $e){
    echo "error" .$e->getMessage();
}
?>