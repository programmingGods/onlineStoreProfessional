<?php

//Вывод ошибок
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//Получаем данные из формы
$username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$repeatPass = filter_var(trim($_POST['repeatPassword']),FILTER_SANITIZE_STRING);

//Проверка заполненности полей
if(empty($_POST['username'])){
    exit('Заполните поле "Имя пользователя"');
}
if(empty($_POST['login']) && !empty($_POST['username'])){
    exit('Заполните поле "Логин"');
}
if(empty($_POST['password']) && !empty($_POST['login'])){
    exit('Заполните поле "Пароль"');
}
if(empty($_POST['repeatPassword']) && !empty($_POST['password'])){
    exit("Повторите пароль");
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

//функция проверки наличия цифры в слове
function hasDigit($string){
    $digits = '0123456789';
    for($i = 0; $i < mb_strlen($string); $i++){
        if(strpos($digits, $string[$i])){
            return true;
        }
    }
    return false;
}

if(mb_strlen($password) < 8){ //не менее 8 символов в пароле
    exit("Пароль должен состоять не менее, чем из 8 символов");
}

if(mb_strlen($password) > 50){ //не более 50 символов в пароле
    exit("Пароль должен состоять не более, чем из 50 символов");
}

if(!hasDigit($password)){ //хотя бы одна цифра в пароле
    exit("Пароль должен содержать хотя бы одну цифру");
}

if(mb_strtolower($password) === $password){ //хотя бы одна заглавная буква в пароле
    exit("Пароль должен содержать хотя бы одну заглавную букву");
}

if($password !== $repeatPass){ //пароли должны совпадать
    exit("Пароли не совпадают");
}

if(mb_strlen($username) < 5){ //не менее 5 символов в имени
    exit("Имя пользователя должно состоять не менее, чем из 5 символов");
}

if(mb_strlen($username) > 20){ //не более 20 символов в имени
    exit("Имя пользователя должно состоять не более, чем из 20 символов");
}

if(!hasLetter($username)){ //хотя бы одна буква в имени
    exit("Имя пользователя должно содержать хотя бы одну букву");
}

if(mb_strlen($login) < 5){ //не менее 5 символов в логине
    exit("Логин должен состоять не менее, чем из 5 символов");
}

if(mb_strlen($login) > 30){ //не более 30 символов в логине
    exit("Логин должен состоять не более, чем из 30 символов");
}

if(!hasLetter($login)){ //хотя бы одна буква в логине
    exit("Логин должен содержать хотя бы одну букву");
}

//Подключение к базе данных
require("database.php");
$mysql -> set_charset('utf8');

//Проверка существования пользователя с таким именем
$query = $mysql -> query("SELECT * FROM `clients` WHERE `username` = '$username'");
for($data = []; $row = mysqli_fetch_assoc($query); $data = $row); //массив записей, подходящих под условие
if(count($data) !== 0){
    exit("Пользователь с таким именем уже существует"); 
}

//Проверка существования пользователя с таким логином
$query = $mysql -> query("SELECT * FROM `clients` WHERE `login` = '$login'");
for($data = []; $row = mysqli_fetch_assoc($query); $data = $row);
if(count($data) !== 0){
    exit("Пользователь с таким логином уже существует"); 
}

//Отправка данных в базу
$mysql -> query("INSERT INTO `clients` (`login`, `username`, `password`) VALUES('$login', '$username', '$password')");
$mysql -> close();

header("Location: ../index.php");
?>