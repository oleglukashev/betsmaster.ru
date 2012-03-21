<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Main {
    
    public $template = 'main';
    
	public function action_index()
	{
            echo $this->request->param('id');
	    $this->template->content = 'hello, world!';
	}

} // End Welcome
