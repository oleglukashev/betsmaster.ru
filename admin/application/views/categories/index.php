<?=$header;?>
<div class="content">
    <h1>Categories</h1>
    <div class="hr"></div>
    <div class="admin_create_new_category">
        <p><a href="/admin/categories/create">New category</a></p>
    </div>
    <div class="admin_categories_wrap"></div>
</div>
<div class="dialog_class" id="dialog_delete_category_item">Are you sure want to delete this category?</div>
<script type="text/javascript">
    $(document).ready(function() {

        adminCategories.initCategories(<?=$categories;?>);

        //create new categories
        $("div.admin_create_new_category a").fancybox({
            ajax : {
                type : 'GET',
                data : 'mydata=test'
            }
        }); 
    });

    function delete_category(id)
    {
        $('#dialog_delete_category_item').dialog({
            title: 'Delete category',
            modal:true,
            width: 300,
            position: ['center', 'center'],
            buttons: {
                'Yes': function()
                {
                    $.ajax({
                        url: '/admin/categories/delete',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(data)
                        {
                            if (data)
                            {
                                $('#admin_category_' + id).remove();
                            }
                        }
                    });

                    $(this).dialog('close');
                },
                'No': function()
                {
                    $(this).dialog('close');
                }
            }
        });
    }
</script>
<?=$footer;?>
