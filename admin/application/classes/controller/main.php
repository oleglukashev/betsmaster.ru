<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $folder = 'default';

    public function getHeaderVariables()
    {
        $model_main = new Model_Main();

        return array(
            'styles' => array(
                "/admin/css/reset.css",
                "/admin/css/main.css",
                "/admin/css/ckeditor/editor.css",
                "/admin/css/jquery-ui-1.8.17.custom.css",
                "/admin/css/jquery.fancybox-1.3.4.css",
            ),
            'scripts' => array(
                "/admin/js/adminCategories.js",
                "/admin/js/validForms.js",
                "/admin/js/jquery-1.7.1.min.js",
                "/admin/js/jquery-ui-1.8.17.custom.min.js",
                "/admin/js/jquery.fancybox-1.3.4.pack.js",
                "/admin/js/ckeditor/ckeditor.js", 
                "/admin/js/ckeditor/config.js",
                "/admin/js/ckeditor/default.js", 
                "/admin/js/ckeditor/ru.js",
            ),
            'meta_keywords' => '',
            'meta_description' => '',
            'menu' => (Auth::instance()->logged_in() ? $model_main->getMenu() : array())
        );
    }


    public function before()
    {
        parent::before();

        if($this->auto_render)
        {
            $this->template->main_only = false;
        }
    }

    public function after()
    {
        if($this->auto_render)
        {
            if($this->template->main_only)
            { 
                $this->response->body(View::factory($this->template->main_view, $this->template->main)->render());
            } 
            else 
            { 
                if (!Auth::instance()->logged_in())
                {
                    $this->request->redirect('/login');
                }
                // Выводим контроллер обыкновенный
                $this->template->header = View::factory("{$this->folder}/header", $this->getHeaderVariables())->render();
                $this->template->footer = View::factory("{$this->folder}/footer")->render();

                parent::after();
            }
        }
    }
} // End Index 
