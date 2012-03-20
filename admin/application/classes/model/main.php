<?php defined('SYSPATH') or die('No direct script access.');

class Model_Main extends Model
{
    public function getMenu()
    {
        $request = DB::select()->from('admin_mainmenu')->execute()->as_array();

        return $request;
    }
}
?>
