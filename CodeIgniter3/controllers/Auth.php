<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Glad\Glad;

class Auth extends CI_Controller {

	public function index()
	{
		Glad::setup($this->config->item('glad'));
		Glad::services(['db' => $this->glad_model]);

		Glad::login(['username' => 'example@example.com', 'password' => '123412']);

		if(Glad::status() === true) {

			// do something...

		}
	}
}
