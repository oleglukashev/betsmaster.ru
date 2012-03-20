function validForm(form, fields, same_fields) {
    this.fields = fields;
    this.errors = {};
    this.fields_wrap = form;

    this.initForm();
}

validForm.prototype.initForm = function()
{
    var that = this;
    for (var i in this.fields)
    {
        (function (i) {
            $(that.fields_wrap.selector + ' [name="' + i + '"]').blur(function() {
                that.filedMatch(i);
            });
        })(i);
    }

    this.fields_wrap.append('<div class="validForms_wrap"><div>');
}

validForm.prototype.checkForm = function(check_fields_obj)
{
    var allOk = true;

    for (var i in ((check_fields_obj) ? check_fields_obj : this.fields))
    {
        if (!this.filedMatch(i))
            allOk = false;
    }

    return allOk;
}

validForm.prototype.filedMatch = function(check_field)
{
    var result = true;

    if (check_field)
    {
        if (this.fields[check_field])
        {
            if (!$.trim($('[name="' + check_field + '"]').val()).match(this.fields[check_field]))
            {
                $('[name="' + check_field + '"]').addClass('validForms_field_error');
                result = false;
            }
            else
            {
                $('[name="' + check_field + '"]').removeClass('validForms_field_error');
            }
        }
    }
    else
    {
        for (var i in this.fields)
        {
            if (this.fields[i])
            {
                if (!$.trim($('[name="' + i + '"]').val()).match(this.fields[i]))
                {
                    $('[name="' + i + '"]').addClass('validForms_field_error');
                    result = false;
                }
                else
                {
                    $('[name="' + i + '"]').removeClass('validForms_field_error');
                }
            }
        }
    }

    return result;
}

validForm.prototype.show_errors = function()
{
    for (var i in this.errors)
    {
        $('div.validForms_wrap').append('<div class="validForms_error">' + this.errors[i] + '</div>');    

        $('[name="' + i + '"]').addClass('validForms_field_error');
    }
}

validForm.prototype.hide_errors = function()
{
    $('div.validForms_wrap').remove();

    for (var i in this.fields)
    {
        $('[name="' + i + '"]').removeClass('validForms_field_error');
    }
}
