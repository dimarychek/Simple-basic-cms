<?=include("header.php")?>

<div class="container">
    <a href="http://cms.idealab.com.ua/admin/">Панель администратора</a>
    <?php foreach($articles as $a) { ?>
        <div class="article">
            <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
            <em>Published: <?=$a['date']?></em>
            <p><?=articles_intro($a['content'])?></p>
        </div>
    <?php } ?>
</div>

<?=include("footer.php")?>