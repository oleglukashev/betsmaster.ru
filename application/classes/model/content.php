<?php defined('SYSPATH') or die('No direct script access.');

class Model_Content extends Model
{
    public function getContent($url)
    {
        $request = DB::select()
            ->from('categories')
            ->join('materials')
            ->on('categories.material_id', '=', 'materials.id')
            ->where('url', '=', $url)
            ->limit(1)
            ->execute()
            ->as_array();

        return $request;
    }
}
?>
