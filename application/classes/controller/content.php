<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Content extends Controller_Main {

    public $template = 'content/main';

    public function action_index()
    {
        $this->model = new Model_Content();

        $url = $this->request->param('url');
        $this->template->content = $this->getContent($url);
    }

    public function getContent($url)
    {
        return $this->model->getContent($url);
    }
} // End Welcome
