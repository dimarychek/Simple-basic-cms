<?=include("header.php")?>

<div class="container">
    <div class="article">
        <h3><?=$article['title']?></h3>
        <em>Published: <?=$article['date']?></em>
        <p><?=$article['content']?></p>
    </div>
</div>

<?=include("footer.php")?>