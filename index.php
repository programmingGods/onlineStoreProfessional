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
        <div class="clear"><br /></div>
        <center>
            <div id="menu">Разделы
                <hr />
            </div>
            <div id="menuHrefs">
                <a href="about.php">О нас</a>
                <a href="feedback.php">Обратная связь</a>
                <a href="auth.php">Вход</a>
                <a href="reg.php">Регистрация</a>
            </div>
        </center>
        <div id="wrapper">
            
            <?php require "blocks/popular.php" ?>

            <div calss="clear">
                <div id="main_soc_block">
                    <center>
                        <div id="main_soc_block_in">
                            <h3>Регистрируйтесь на сайте</h3>
                            <p>Только у нас лучшие спортивные товары!!!</p>
                            <a href="reg.php" title="Зарегистрироваться">Регистрируйтесь</a>
                        </div>
                    </center>
                </div>
            </div>
            <?php require "blocks/categories.php" ?>
        </div>
    </div>
    <?php require "blocks/footer.php" ?>
    
</body>

</html>