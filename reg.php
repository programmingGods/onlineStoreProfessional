<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="test, website, site" />
    <meta name="description" content="Сайт для Nethammer" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn3.iconfinder.com/data/icons/education-and-school-8/48/Winner-512.png" rel="shortcut icon" type="image/x-icon" />
    <title>Интернет-магазин</title>
</head>

<body>
    <div id="page-wrap">
        <?php require "blocks/header.php" ?>
        <center>
            <img src="https://cdn3.iconfinder.com/data/icons/education-and-school-8/48/Winner-512.png" alt="Sport-Line" title="Sport-Line" class="registrTitle" />
            <label class="RegistrTitle">Sport-Line</label>
            <div id="SignUp">

                <div id="popular">
                    <article>
                        <h3 id="TitleReg">Регистрация</h3>
                        <form action="php/addClient.php" method="POST">
                            <input type="text" class="logName" name="username" placeholder="Имя пользователя" />
                            <input type="text" class="logName" name="login" placeholder="Логин" />
                            <input type="password" class="logName" name="password" placeholder="Пароль" />
                            <input type="password" class="logName" name="repeatPassword" placeholder="Повторите пароль" />
                            <button id="ButtonReg">Зарегистрироваться</button>
                        </form>
                    </article>
                </div>
            </div>
        </center>
    </div>
    <?php require "blocks/footer.php" ?>

</body>

</html>