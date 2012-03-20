<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mainlogin extends Controller_Template {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        if($this->auto_render)
        {
            parent::after();
            
            if (Auth::instance()->logged_in())
            {
                $this->request->redirect('/categories');
            }
        }
    }
} // End Index 
