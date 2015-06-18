<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2015 Fuel Development Team
 * @link       http://fuelphp.com
 */

use \Glad\Glad;

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Auth extends Controller
{
	public function before()
    {
        Glad::setup(Config::load('glad'));
    }

	/**
	 * The basic login
	 *
	 * @access  public
	 * @return  Mixed
	 */
	public function action_index()
	{
		Glad::login(['email' => 'ali.yildiz@example.com', 'password' => '1234123']);
		
		if(Glad::status() === true) {

			// do something...

		}
	}
}
