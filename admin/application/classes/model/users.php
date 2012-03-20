<?php defined('SYSPATH') or die('No direct script access.');

class Model_Users extends Model
{
    public function getUsers()
    {
        return DB::select()->
            from('admin_users')->
            execute()->
            as_array();
    }

    public function addUser($user_params)
    {
        return DB::insert('admin_users', array(
                'id',
                'name',
                'email',
                'password'))->
            values(array(
                'null',
                $user_params['name'],
                $user_params['email'],
                $user_params['password']))->
            execute();
    }

    public function editUser($new_user_params)
    {
      return DB::update('admin_users')->
          set(array(
            'name'      => $new_user_params['name'],
            'email'     => $new_user_params['email'],
            'password'  => $new_user_params['password']))->
          where('id', '=', $new_user_params['id'])->
          execute();
    }

    public function getUserInfo($user_id)
    {
        $request = DB::select('id', 'name', 'email')->
            from('admin_users')->
            where('id', '=', $user_id)->
            limit(1)->
            execute()->
            as_array();

        return $request[0];
    }

    public function delCategory($user_id)
    {
        return DB::delete('admin_users')->
            where('id', '=', $user_id)->
            execute();
    }
}
?>
