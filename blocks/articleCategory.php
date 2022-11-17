<article>
    <img src=<?php echo ($articles['img']) ?> alt="<?php echo ($articles['name']) ?>" title="<?php echo ($articles['name']) ?>" />
    <h3 class="center"><?php echo ($articles['name']) ?></h3>
    <form class="center" action="/onlineStoreProfessional/category.php" method="POST">
        <button id="ButtonMore" name="id" value=<?php echo ($articles['id']) ?> title="Смотреть далее">Смотреть далее</button>
    </form>
</article>