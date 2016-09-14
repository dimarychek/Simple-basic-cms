<?=include("header_admin.php")?>

<div class="container">
    <a href="/admin/articles.php?action=add">Добавить статью</a>
    <table class="admin_table">
        <tr>
            <th>Дата</th>
            <th>Загаловок</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($articles as $a) { ?>
            <tr>
                <td><?=$a['date']?></td>
                <td><?=$a['title']?></td>
                <td><a href="/admin/articles.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                <td><a href="/admin/articles.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
            </tr>
        <?php } ?>
    </table>
</div>

<?=include("footer_admin.php")?>