<?=$header;?>
<div class="content">
    <h1>Users</h1>
    <div class="hr"></div>
    <div class="admin_users_list_wrap">
        <div class="admin_create_new_user">
            <p><a href="/admin/users/create">New user</a></p>
        </div>
        <?foreach($users as $u):?>
            <div id="admin_user_<?=$u['id'];?>" class="admin_user_item_wrap">
                <p class="admin_user_item_edit">
                <span><a href="/admin/users/edit/<?=$u['id'];?>">edit</a></span>
                    <span><a href="javascript://" onclick="delete_user(<?=$u['id'];?>); return false;">delete</a></span>
                </p>
                <p class="admin_user_item_name"><?=$u['name'];?></p>
            </div>
        <?endforeach;?>
    </div>
</div>
<div class="dialog_class" id="dialog_delete_user_item">Are you sure want delete this user?</div>
<script type="text/javascript">
    $(document).ready(function() {
        //create new user
        $("div.admin_create_new_user a").fancybox({
            ajax : {
                type : 'GET',
                data : 'mydata=test'
            }
        }); 
    });
    function delete_user(id)
    {
        $('#dialog_delete_user_item').dialog({
            title: 'Delete user',
            modal: true,
            width: 300,
            position: ['center', 'center'],
            buttons: {
                'Yes': function()
                {
                    $.ajax({
                        url: '/admin/users/delete/' + id,
                        type: 'GET',
                        success: function(data)
                        {
                            if (data)
                            {
                                $('#admin_user_' + id).remove();
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
