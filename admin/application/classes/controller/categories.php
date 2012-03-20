<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Categories extends Controller_Main {

    public $template = 'categories/index';

    public function action_index()
    {
        $model_categories = new Model_Categories();
        $this->template->categories = json_encode($model_categories->getCategories());
    }

    public function action_edit()
    {
        $model_categories = new Model_Categories();
        $template_name = 'categories/edit';
        $this->template->set_filename($template_name);
        $this->template->materials = $model_categories->getMaterials(); 
        $this->template->categories = $model_categories->getCategories();

        if (isset($_REQUEST['send']))
        {
            $model_categories->editCategory($_REQUEST);
            exit;
        }

    }
    
    public function action_create()
    {
        $model_categories = new Model_Categories();
        $template_name = 'categories/create';
        $this->template->set_filename($template_name);
        $this->template->materials = $model_categories->getMaterials(); 
        $this->template->categories = $model_categories->getCategories();

        if (isset($_REQUEST['send']))
        {
            echo $model_categories->addCategory($_REQUEST);
            exit;
        }
    }

    public function action_delete()
    {
        $model_categories = new Model_Categories();
        $id = Arr::get($_POST, 'id', '');       

        echo $model_categories->delCategory($id);
        exit;
    }
}
