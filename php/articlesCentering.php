<?php 
for ($i = 0; $i < $numRowsArticles; $i++): ?>
    <div class="center">
        <?php
        for ($j = 0; $j < $numArticlesLine; $j++): $articles=mysqli_fetch_assoc($result); 
            require($pathArticle); ?>
        <?php endfor; ?>
    </div>

    <div class="clear"></div>

<?php endfor;?>

<div class="clear"></div>

<div class="center">
    <?php
        // Количество оставшихся артайклов
        $numRemainingArticles = $numArticlesAll % $numArticlesLine;
        if ($numRemainingArticles != 0)
            for ($i = 0; $i < $numRemainingArticles; $i++): $articles=mysqli_fetch_assoc($result); 
                require($pathArticle);?>
    <?php endfor; $mysql->close();?>
</div>

<div class="clear"></div>