<?php defined('SYSPATH') or die('No direct script access.');

class Model_Categories extends Model
{
    public function getCategories()
    {
        return DB::query(Database::SELECT, 'SELECT * FROM categories ORDER BY "pid", "id"')->
            execute()->
            as_array();
    }

    public function getMaterials()
    {
        return DB::select()->
            from('materials')->
            execute()->
            as_array();
    }

    public function addCategory($category_params)
    {
        $request = DB::insert('categories', array(
                'id',
                'url',
                'pid',
                'title',
                'description',
                'material_id'))->
            values(array(
                "null",
                $this->concatUrlWithParentCategory($category_params['pid'], $category_params['url']),
                $category_params['pid'],
                $category_params['title'],
                $category_params['description'],
                $category_params['material']))->execute();

        return $request[0];
    }

    public function editCategory($category_params)
    {
        $request = DB::update('categories')->
            set(array(
                'url'         => $this->concatUrlWithParentCategory($category_params['pid'], $category_params['url']),
                'pid'         => $category_params['pid'],
                'title'       => $category_params['title'],
                'description' => $category_params['description'],
                'material_id' => $category_params['material_id']))->
            where('id', '=', $category_params['id'])->
            execute();

        return $request[0];
    }

    public function delCategory($id)
    {
        return DB::delete('categories')->
            where('id', '=', $id)->
            execute();
    }

    public function concatUrlWithParentCategory($parent_id, $url)
    {
        if ($parent_id != "0")
        {
            $parent_url = DB::select('url')->
                from('categories')->
                where('id', '=', $parent_id)->
                execute()->
                as_array();
                
            $str = $parent_url[0]['url'] . "/" . $url; 
        }
        else
        {
            $str = $url;
        }

        return $str;
    }
}
?>
