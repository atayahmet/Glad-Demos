<?php

namespace Model;

use Glad\Interfaces\DatabaseAdapterInterface;
use Glad\Traits\FuelTrait;

class GladAuth extends \Model_Crud implements DatabaseAdapterInterface {

	// Set the table to use
    protected static $_table_name = 'users';

    use FuelTrait;
}