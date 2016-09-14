<?=include("header_admin.php")?>

    <div class="container">
        <div>
            <form class="admin_form" method="post" action="/admin/settings.php">
                <label>
                    Название сайта
                    <input type="text" name="site_name" value="<?=$settings['site_name']?>" class="form-item" autofocus required></label>
                <label>
                    Копирайт
                    <input type="text" name="copyright" value="<?=$settings['copyright']?>" class="form-item"></label>
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
    </div>

<?=include("footer_admin.php")?>