<?=include("header_admin.php")?>

<div class="container">
    <div>
        <form class="admin_form" method="post" action="/admin/articles.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required></label>
            <label>
                Дата
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required></label>
            <label>
                Содержимое
                <textarea rows="10" name="content" class="form-item" required><?=$article['content']?></textarea></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
</div>

<?=include("footer_admin.php")?>