<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Template
{
    public $template = 'shared/base';

    public function action_index()
	{
        if (!empty($_POST)) {
            $mailer = Email::connect();
            
            $message = Swift_Message::newInstance('Eleventh House reunion concert question')
              ->setFrom(array($_POST['email'] => $_POST['name']))
              ->setTo(array('phigdish@gmail.com' => 'Dan'))
              ->setBody($_POST['comment']);
              
            if($mailer->send($message)) {
                //echo 'success';
            }
        }

        $view = View::factory('contact/index');
		$this->template->active = $this->request->uri();
		$this->template->main_content = $view;
    }
}