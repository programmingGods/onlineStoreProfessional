<div id="popular">
    <h2>Популярное</h2>
    <?php
    require("php/database.php");
    $result = $mysql->query("SELECT * FROM `products` ORDER BY number_orders DESC");
        
    // Количество артайклов в одной строке
    $numArticlesLine = 4;
                
    // Количество всех артайклов
    $numArticlesAll = 4; 
                    
    // Количество строк с артайклами
    $numRowsArticles = floor($numArticlesAll / $numArticlesLine);
                
    //Товары отсортированые по убыванию
    $result = $mysql->query("SELECT * FROM products ORDER BY products.number_orders DESC");
        
    //Путь до файла с артайклом
    $pathArticle = "blocks/articleProduct.php";
    
    require("php/articlesCentering.php"); ?>
</div>