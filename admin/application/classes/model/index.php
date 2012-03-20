<?php defined('SYSPATH') or die('No direct script access.');

class Model_Index extends Model
{
    public function getCategories()
    {
        $request = DB::select()->from('categories')->execute()->as_array();

        return $request;
    }
}
?>
