<h1>New user</h1>
<div class="hr"></div>
<div class="admin_create_users_wrap">
    <form action="" onsubmit="return false;" method="POST">
        <div class="admin_create_users_item">
            <p>User name:</p>
            <p><input class="text" type="text" maxlength="255" name="name" /></p>
        </div>
        <div class="admin_create_users_item">
            <p>E-mail:</p>
            <p><input class="text" type="text" maxlength="50" name="email" /></p>
        </div>
        <div class="admin_create_users_item">
            <p>Password:</p>
            <p><input class="text" type="password" maxlength="50" name="password" /></p>
        </div>
        <div class="admin_create_users_item">
            <p>Password again:</p>
            <p><input class="text" type="password" maxlength="50" name="password_again" /></p>
        </div>

        <div class="buttons_wrap">
            <input type="hidden" value="1" name="send" />
            <input class="button" type="submit" value="Save" />
            <a class="button" href="javascript://">Cancel</a>
        </div>
    </form>
</div>
    
<script type="text/javascript">
    var createUser = new validForm($('div.admin_create_users_wrap form'),
        {
            name: /[-a-z0-9!#$%&'*+/=?^_`{|}~]+(\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*/,
            email: /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/,
            password: /^[a-zA-Z0-9_\-\.]{6,}$/,
            password_again: /^[a-zA-Z0-9_\-\.]{6,}$/,
        });

$('div.admin_create_users_wrap form').submit(function () {
    if (!createUser.checkForm())
        return false;

    var that = $('div.admin_create_users_wrap');
    
    var new_users_info = {
        name: $.trim(that.find('input[name="name"]').val()),
        password: $.trim(that.find('input[name="password"]').val()),
        password_again: $.trim(that.find('input[name="password_again"]').val()),
        email: $.trim(that.find('input[name="email"]').val()),
        send: $.trim(that.find('input[name="send"]').val())
    }

    $.ajax({
        url: '/admin/users/create',
        type: 'POST',
        data: new_users_info,
        success: function(data) {
            if (data)
            {
                $.fancybox.close();    

                $('div.admin_users_list_wrap').append('<div class="admin_user_item_wrap">' +
                                                            '<p class="admin_user_item_edit">' +
                                                                '<span><a href="/admin/users/edit">edit</a></span>' +
                                                                '<span><a href="/admin/users/delete">delete</a></span>' +
                                                            '</p>' +
                                                            '<p class="admin_user_item_name">' + new_users_info.name + '</p>' +
                                                    '</div>');
            }
        }
    });
});

$('div.buttons_wrap a.button').click(function() {
    $.fancybox.close();
});
</script>
