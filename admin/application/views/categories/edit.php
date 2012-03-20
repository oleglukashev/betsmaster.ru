<?=$header;?>
<div class="content">
    <h1>Edit category</h1>
    <div class="hr"></div>
    <div class="admin_create_category_wrap">
        <form action="" method="POST">
            <div class="admin_create_category_item">
                <p>Category Name:</p>
                <p><input class="text" type="text" maxlength="200" name="name" /></p>
            </div>
            <div class="admin_create_category_item">
                <p>Description:</p>
                <p><input class="text" type="text" maxlength="200" name="description" /></p>
            </div>
            <div class="admin_create_category_item">
                <p>Select material:</p>
                <p><select name="material">
                    <option value="0">No</option>
                    <?foreach($materials as $m):?>
                        <option value="<?=$m['id'];?>"><?=$m['title'];?></option>
                    <?endforeach;?>
                </select></p>

            </div>
            <div class="admin_create_category_item">
                <p>Parent category:</p>
                <p><select name="parent">
                    <option value="0">No</option>
                    <?foreach($categories as $c):?>
                        <option value="<?=$c['id'];?>"><?=$c['title'];?></option>
                    <?endforeach;?>
                </select></p>
            </div>
             <div class="buttons_wrap">
                <input type="hidden" value="1" name="send" />
                <input class="button" type="submit" value="Save" />
                <a class="button" href="/admin/categories/">Cancel</a>
            </div>
        </form>
    </div>
    <?if (isset($create_complete)):?>
        <div class="notification">
            <p><?=$create_complete;?></p>
        </div>
    <?endif;?>
</div>

<?=$footer;?>
