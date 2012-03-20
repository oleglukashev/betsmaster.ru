<?php defined('SYSPATH') or die('No direct script access.');

class Model_Login extends Model
{
    public function checkUser($name, $password)
    {
        return DB::select('id')->
            from('admin_users')->
            where('name', '=', $name)->
            and_where('password', '=', $password)->
            execute()->
            count();
    }
}
?>
