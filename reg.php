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
    <center>
        <img src="https://cdn3.iconfinder.com/data/icons/education-and-school-8/48/Winner-512.png" alt="Sport-Line" title="Sport-Line" class="registrTitle"/>
        <label class="RegistrTitle">Sport-Line</label>
        <div id="SignUp">
            
            <div id="popular">
                <article> 
                    <h3 id="TitleReg">Регистрация</h3>
                    <form action="php/addClient.php" method="POST">
                        <input type="text" class="logName" name="username" placeholder="Имя пользователя"/>
                        <input type="text" class="logName" name="login" placeholder="Логин"/>
                        <input type="password" class="logName" name="password" placeholder="Пароль"/>
                        <button id="ButtonReg">Зарегистрироваться</button>
                    </form>
                </article>
            </div>    
        </div>
    </center>                
</div>
<footer>
    <span class = "left">Все права защищены &2022</span>
    <span class= "right">Соц. кнопки<img src = "img/VK.png" alt = "Группа ВКонтакте" title = "Группа ВКонтакте"/></span>
</footer>
    
</body>
</html>