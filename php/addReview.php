<?php

//Вывод ошибок
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//Получение данных из формы
$subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING); 
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

//Проверка заполненности полей
if(empty($_POST['subject'])){
    exit('Не заполнено поле "Тема"');
}

if(empty($_POST['email']) && !empty($_POST['subject'])){
    exit('Не заполнено поле "Email"');
}

if(empty($_POST['name']) && !empty($_POST['email'])){
    exit('Не заполнено поле "Имя"');
}

if(empty($_POST['message']) && !empty($_POST['name'])){
    exit('Не введено сообщение');
}

//Проверка корректности введённых данных

//функция проверки наличия буквы в слове
function hasLetter($string){
    $letters = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for($i = 0; $i < mb_strlen($string); $i++){
        if(strpos($letters, $string[$i])){
            return true;
        }
    }
    return false;
}

if(mb_strlen($subject) < 3){ //не менее 3 символов в теме
    exit("Тема должна состоять не менее, чем из 3 символов");
}

if(mb_strlen($subject) > 40){ //не более 40 символов в теме
    exit("Тема должна состоять не более, чем из 40 символов");
}

if(!hasLetter($subject)){ //хотя бы одна буква в теме
    exit("Тема должна содержать хотя бы одну букву");
}

if(mb_strlen($name) < 2){ //не менее 2 символов в имени
    exit("Имя должно состоять не менее, чем из 2 символов");
}

if(mb_strlen($name) > 30){ //не более 30 символов в сообщении
    exit("Имя должно состоять не более, чем из 30 символов");
}

if(!hasLetter($name)){ //хотя бы одна буква в имени
    exit("Имя должно содержать хотя бы одну букву");
}

if(mb_strlen($message) < 5){ //не менее 5 символов в сообщении
    exit("Сообщение должно состоять не менее, чем из 5 символов");
}

if(mb_strlen($message) > 500){ //не более 500 символов в сообщении
    exit("Сообщение должно состоять не более, чем из 500 символов");
}

if(!hasLetter($message)){ //хотя бы одна буква в сообщении
    exit("Сообщение должно содержать хотя бы одну букву");
}

//Подключение к базе данных
require("database.php");
$mysql -> set_charset('utf8mb4');

//Отправка данных в базу
$mysql -> query("INSERT INTO `reviews` (`topic`, `email`, `name`, `message`) VALUES('$subject', '$email', '$name', '$message')");
$mysql -> close();

header("Location: ../index.php");
?>