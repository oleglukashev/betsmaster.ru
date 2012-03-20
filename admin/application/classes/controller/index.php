<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Main {

    public $template = 'index';

    public function action_index()
    {
        //default parametrs
        $this->template->title = "Заголовок";
        $this->template->categories = $this->getCategories();
    }

    public function getCategories()
    {
        $model = new Model_Index();

        return $model->getCategories();
    }
}
