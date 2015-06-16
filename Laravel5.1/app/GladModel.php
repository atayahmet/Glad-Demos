<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Glad\Interfaces\DatabaseAdapterInterface;

class GladModel extends Model implements DatabaseAdapterInterface
{
	
    use Glad\Traits\LaravelTrait;

	/**
     * The database table used by the model.
     *
     * @var string
     */
	protected $table = 'users';

	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'email', 'username', 'password'];
}
