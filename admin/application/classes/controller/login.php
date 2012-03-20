<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Mainlogin {

    public $template = 'login';

    public function action_index()
    {
        $post = $this->request->post();
        if (isset($post['name']) && isset($post['password']))
        {
            $model_login = new Model_Login();
            $name     = $post['name'];
            $password = $post['password'];

            if ($model_login->checkUser($name, $password))
            {
                $complete = Auth::instance()->login($name, $password);
                
                $this->request->url('/categories/');
            }
        }
    }
}
