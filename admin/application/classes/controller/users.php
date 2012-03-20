<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Main {

    public $template = 'users/index';

    public function action_index()
    {
        $modelUsers = new Model_Users();
        $this->template->users = $modelUsers->getUsers();
    }

    public function action_edit()
    {

        if ($this->request->param('id'))
        {
            $model_users = new Model_Users();
            $template_name = 'users/edit';
            $this->template->set_filename($template_name);
            
            $user_id = $this->request->param('id');
            $this->template->user_info = $model_users->getUserInfo($user_id);
        }


        if (isset($_REQUEST['send']))
        {
            $new_user_params = array();

            foreach($_REQUEST as $key=>$item)
            {
                $new_user_params[$key] = $item;
            }

            //add id from uri
            $new_user_params['id'] = $this->request->param('id');

            echo $model_users->editUser($new_user_params);
            exit;
        }

    }
    
    public function action_create()
    {
        $model_users = new Model_Users();
        $template_name = 'users/create';
        $this->template->set_filename($template_name);

        if (isset($_REQUEST['send']))
        {
            echo $model_users->addUser($_REQUEST);
            exit;
        }
    }

    public function action_delete()
    {
        if ($this->request->param('id'))
        {
            $model_users = new Model_Users();

            $user_id = $this->request->param('id');

            echo $model_users->delCategory($user_id);
            exit;
        }
    }
}
