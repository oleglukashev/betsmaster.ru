<h1>New category</h1>
<div class="hr"></div>
<div class="admin_create_category_wrap">
    <form action="" onsubmit="return false;" method="POST">
        <div class="admin_create_category_item">
            <p>Category name:</p>
            <p><input class="text" type="text" maxlength="200" name="title" /></p>
        </div>
        <div class="admin_create_category_item">
            <p>Description:</p>
            <p><input class="text" type="text" maxlength="200" name="description" /></p>
        </div>
        <div class="admin_create_category_item">
            <p>Url:</p>
            <p><input class="text" type="text" maxlength="200" name="url" /></p>
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
            <p><select name="pid">
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
    
<script type="text/javascript">
$('div.admin_create_category_wrap div.buttons_wrap input[type="submit"]').click(function () {
    var that = $('div.admin_create_category_wrap');
    
    var new_category_info = {
        title: that.find('input[name="title"]').val(),
        description: that.find('input[name="description"]').val(),
        url: that.find('input[name="url"]').val(),
        material: parseInt(that.find('select[name="material"]').val()),
        pid: parseInt(that.find('select[name="pid"]').val()),
        send: that.find('input[name="send"]').val()
    }

    $.ajax({
        url: '/admin/categories/create',
        type: 'POST',
        data: new_category_info,
        success: function(data) {
            if (data)
            {
                $.fancybox.close();    
                
                adminCategories.addCategory({
                    id: data,
                    title: new_category_info.title,
                    pid: new_category_info.pid
                });
            }
        }
    });
});
</script>
