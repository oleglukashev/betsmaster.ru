var adminCategories = {
    categories: {},
    initCategories: function(categories_obj)
    {
        for(var i in categories_obj)
        {   
            this.categories[i] = {
                id: parseInt(categories_obj[i].id),
                title: categories_obj[i].title,
                pid: parseInt(categories_obj[i].pid)
            }

            this.addCategory(this.categories[i]);
        }
    },
    addCategory: function(category_data)
    {
        var str = '<div class="admin_category_wrap"><div id="admin_category_' + category_data.id + '" class="admin_categories_item">' +
                        '<p>' + category_data.title + '</p>' +
                        '<p class="admin_categories_item_edit">' +
                            '<span><a href="/admin/categories/edit/' + category_data.id + '">edit</a></span>' +
                            '<span><a href="javascript://" class="admin_categories_item_del">delete</a></span>'
                        '</p>' +
                    '</div></div>';

        if (category_data.pid)
            $('#admin_category_' + category_data.pid).parent().append(str);
        else
            $('div.admin_categories_wrap').append(str);

        //add del event
        $('#admin_category_' + category_data.id + ' span a.admin_categories_item_del').click(function() {
            delete_category(category_data.id);
        });
    },

}
