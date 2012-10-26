<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Band extends Controller_Template {
    public $template = 'shared/base';
    
	public function action_index()
	{
		$view = View::factory('band/index');
		$this->template->active = $this->request->uri();
		$this->template->main_content = $view;
	}

	public function action_videos($title = NULL) {
    	$view = View::factory('band/videos/list');
		$this->template->active = 'eleventh-house';
		$this->template->main_content = $view;
	}
}
