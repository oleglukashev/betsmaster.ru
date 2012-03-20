<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Modules extends Controller_Main {

    public $template = 'modules/index';

    public function action_index()
    {
        $model_modules = new Model_Modules();
        $post = $this->request->post();

        if (isset($post['id']) && isset($post['included']))
        {
            echo $model_modules->changeModule($post['id'], $post['included']);
            exit;
        }

        $this->template->modules = $model_modules->getModules();
    }
}
