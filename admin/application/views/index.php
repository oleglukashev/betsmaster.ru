<?=$header;?>
<div class="content">
    <h1>Categories</h1>
    <div class="hr"></div>
    <div class="admin_create_new_category">
        <p><a href="javascript://">Создать новую категорию</a></p>
    </div>
    <div class="admin_categories_wrap">
        <?foreach($categories as $c):?>
            <div class="admin_categories_item">
                <p><?=$c['title'];?></p>
                <p class="admin_categories_item_edit">
                <span><a href="/admin/categories?id=<?=$c['id'];?>">edit</a></span>
                    <span><a href="javascript://">delete</a></span>
                </p>
            </div>
        <?endforeach;?>
    </div>
</div>
<?=$footer;?>
