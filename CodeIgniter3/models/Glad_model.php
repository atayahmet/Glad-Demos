<?php

use Glad\Interfaces\DatabaseAdapterInterface;
use Glad\Traits\CodeIgniter3Trait;

class Glad_Model extends CI_Model implements DatabaseAdapterInterface
{
	protected $table;
	protected $id;

	use CodeIgniter3Trait;

	public function __construct()
	{
		$this->load->database();

		$this->table  = 'users';
		$this->id = 'id';
	}
}