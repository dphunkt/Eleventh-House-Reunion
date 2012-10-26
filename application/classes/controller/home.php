<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {
    public $template = 'shared/base';
    
	public function action_index()
	{
		$view = View::factory('home/index');
		$this->template->active = $this->request->uri();
		$this->template->main_content = $view;
	}

}
