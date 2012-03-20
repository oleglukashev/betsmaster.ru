<?=$header;?>
<div class="content">
    <h1>Modules</h1>
    <div class="hr"></div>
    <div class="admin_modules_list_wrap">
        <?foreach($modules as $m):?>
            <div id="admin_modules_<?=$m['id'];?>" class="admin_modules_item_wrap">
            <p class="admin_modules_item_num"><?=$m['id'];?></p>
            <p class="admin_modules_item_included">
                <input id="included_module_<?=$m['id'];?>" type="checkbox" <?=$m['can_change'] ? '' : 'disabled="disabled"'?> <?=$m['included'] ? 'checked="checked"' : '';?> />
                <label for="included_module_<?=$m['id'];?>"></label>
            <p class="admin_modules_item_title"><?=$m['title'];?></p>
            <p class="admin_modules_item_edit"></p>
            </div>
        <?endforeach;?>
    </div>
</div>
<script type="text/javascript">
    $('div.admin_modules_list_wrap input[type="checkbox"]').change(function() {
        var id = $(this).attr('id').slice(16);
        var included = $(this).is(':checked');

        change_module(id, included);    
    });

function change_module(id, included)
{
    $.ajax({
        url: '/admin/modules/',
        type: 'POST',
        data: {
            id: id,
            included: included
        },
        success: function(data)
        {
        }
    });
}
</script>
<?=$footer;?>
