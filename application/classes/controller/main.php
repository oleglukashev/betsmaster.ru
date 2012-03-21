<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $folder = 'default';

    public function getHeaderVariables()
    {
        return array(
            'styles' => array(
                "/css/reset.css",
                "/css/main.css",
                "/css/jquery-ui-1.8.17.custom.css",
            ),
            'scripts' => array(
                "/js/jquery-1.7.1.min.js",
                "/js/jquery-ui-1.8.17.custom.min.js",
            ),
            'meta_keywords' => '',
            'meta_description' => '',
        );
    }


    public function before()
    {
        parent::before();

        if($this->auto_render)
        {
            // Переменные, которые будут передаваться блокам (хедеру, футеру) для отображения
            $this->template->main_only      = false;    
        }
    }

    public function after()
    {
        if($this->auto_render)
        {
            if($this->template->main_only)
            { 
                //Выводим аяксовый (и т.п.) контроллер
                $this->response->body(View::factory($this->template->main_view, $this->template->main)->render()); // Для версии 3.1 и выше
            } 
            else 
            { 
                // Выводим контроллер обыкновенный
                $this->template->header = View::factory("{$this->folder}/header", $this->getHeaderVariables())->render();
                $this->template->footer = View::factory("{$this->folder}/footer")->render();

                parent::after();
            }
        }
    }
} // End Index 
