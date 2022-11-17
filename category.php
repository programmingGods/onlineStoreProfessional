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
            <div id="popular">
                <?php   
                require("php/database.php");
        
                $result = $mysql->query("SELECT name FROM categories WHERE categories.id = " . $_POST['id'] ); 
        
                $categories =mysqli_fetch_assoc($result); ?>

                <h2><?php echo ($categories['name']) ?></h2>

                <?php
                // Количество артайклов в одной строке
                $numArticlesLine = 4;
                
                // Количество артайклов в БД
                $numArticlesAll = mysqli_fetch_row($result = $mysql->query("SELECT COUNT(id) FROM products WHERE products.id_category =" .$_POST['id']))[0]; 
                    
                // Количество строк с артайклами
                $numRowsArticles = floor($numArticlesAll / $numArticlesLine);
                
                // Продукты заданной категории отсортированные по убыванию
                $result = $mysql->query("SELECT * FROM `products` WHERE products.id_category = " .$_POST['id']. " ORDER BY products.number_orders DESC");
                  
                // Путь до файла с артайклом    
                $pathArticle = "blocks/articleProduct.php";
                
                require("php/articlesCentering.php");?>
                
            </div>
        </div>
    </div>
    <?php require "blocks/footer.php" ?>

</body>

</html>