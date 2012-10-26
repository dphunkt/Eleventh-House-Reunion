<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tickets extends Controller_Template {
    public $template = 'shared/base';

	public function action_index()
	{
		$view = View::factory('tickets/index');
		$this->template->main_content = $view;
	}

} // End Welcome
