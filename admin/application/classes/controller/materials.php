<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Materials extends Controller_Main {

    public $template = 'materials/index';

    public function action_index()
    {
        $this->template->materials = array();
    }
}
