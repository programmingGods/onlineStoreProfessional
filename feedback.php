<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content = "test, website, site"/>
    <meta name="description" content = "Сайт для Nethammer"/>
    <link href = "css/style.css" rel = "stylesheet" type ="text/css"/>
    <link href = "https://cdn3.iconfinder.com/data/icons/education-and-school-8/48/Winner-512.png" rel = "shortcut icon" type = "image/x-icon"/>
    <title>Интернет-магазин</title>
</head>
    
<body>
    
<div id = "page-wrap">
<header>
    <a href = "index.php" title = "На главную" id = "logo">Sport-Line</a>
    <span class="contact"><a href="about.php" title="Информация о нас">О нас</a></span>
    <input type = "text" class = "field" placeholder = "Помощь по сайту: "/>
    <span class = "right">
        <span class="contact"><a href="reg.php" title = "Зарегистрироваться">Регистрация</a></span>
        <span class = "contact"><a href="auth.php" title="Войти">Вход</a></span>
    </span>
</header>
    <div class = "clear"><br/></div>
    <center>
        <div id = "menu">Разделы<hr/></div>
        <div id = "menuHrefs">
            <a href = "about.php">О нас</a>
            <a href = "feedback.php">Обратная связь</a>
            <a href = "auth.php">Вход</a>
            <a href = "reg.php">Регистрация</a>
        </div>
    </center>
    <div id="wrapper">
        <div id="popular">
        <form action="php/addReview.php" method="POST" >
        <label for="subject">Тема сообщения</label>
        <input type="text" id="subject" name="subject" placeholder="Тема соообщения" />
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="adress@gmail.com" />
        <label for="name">Введите ваше имя</label>
        <input type="text" id="name" name="name" placeholder="Введите ваше имя" />
        <label for="subject">Введите ваше сообщение</label>
        <textarea placeholder="Введите ваше сообщение" id="message" name="message"> </textarea>
        <input type="submit" value="Отправить" id="send" name="send" />
        </form>
        </div>
    </div>
</div>

<footer>
    <span class = "left">Все права защищены &2022</span>
    <span class="right">Соц. кнопки<img src = "img/VK.png" alt = "Группа ВКонтакте" title = "Группа ВКонтакте"/></span>
</footer>
    
</body>
</html>