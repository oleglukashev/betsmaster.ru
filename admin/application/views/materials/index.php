<?=$header;?>
<div class="content">
    <h1>Materials</h1>
    <div class="hr"></div>
    <div class="admin_materials_list_wrap">
        <?foreach($materials as $m):?>
            <div id="admin_materials_<?=$u['id'];?>" class="admin_materials_item_wrap">
               
            </div>
        <?endforeach;?>
    </div>
</div>
<?=$footer;?>
