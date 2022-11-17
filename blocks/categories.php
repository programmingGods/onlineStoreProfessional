<div id="productCategory">
    <h2>Категории</h2>
    <?php   
    require("php/database.php");
    
    // Количество артайклов в одной строке
    $numArticlesLine = 3; 
    
    // Количество всех артайклов
    $numArticlesAll = mysqli_fetch_row($result = $mysql->query("SELECT COUNT(id) FROM categories"))[0]; 
    
    // Количество строк с артайклов
    $numRowsArticles = floor($numArticlesAll / $numArticlesLine);
    $result = $mysql->query("SELECT * FROM categories");
    
    // Путь до файла с артайклом
    $pathArticle = "blocks/articleCategory.php";
    
    require("php/articlesCentering.php");?>
</div>