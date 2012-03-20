<?php defined('SYSPATH') or die('No direct script access.');

class Model_Modules extends Model
{
    public function getModules()
    {
        $request = DB::select()->from('modules')->execute()->as_array();

        return $request;
    }

    public function changeModule($id, $included)
    {
        return DB::update('modules')->
            set(array('included' => ($included) ? 1 : 0))->
            where('id', '=', $id)->
            execute();
    }
}
?>
