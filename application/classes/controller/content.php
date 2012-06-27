<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Content extends Controller_Main {

    public $template = 'content/main';

    public function action_index()
    {
        $this->model = new Model_Content();

        $url = $this->request->param('url');
        $this->template->sport_types = $this->model->getSportTypes();
        $this->template->challenge = $this->model->getChallenge();
        $this->template->matches = $this->model->getMatchesGroupByTime($this->model->getMatches());
        $this->template->bets = $this->model->getBets();
        $this->template->coefficients = $this->model->getCoefficients();
    }
} // End Welcome
