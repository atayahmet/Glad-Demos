<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Glad\Interfaces\DatabaseAdapterInterface;

class GladModel extends Model implements DatabaseAdapterInterface
{
	
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


    /**
     * Create new user
     *
     * @var $credentials array
     *
     * @return bool|int
     */
    public function gladInsert(array $credentials)
    {
    	return $this->create($credentials)->id;
    }

    /**
     * Update user
     *
     * @var $credentials array
     * @var $where array
     * 
     * @return bool
     */
    public function gladUpdate(array $where, array $credentials)
    {
    	return $this->where($where)->update($credentials);
    }

    /**
     * Get user identity details by identity
     *
     * @var $identity string
     * 
     * @return array
     */
    public function getIdentity($identity)
    {
    	$firstData = $this->where($identity)->first();

    	if(! is_null($firstData)) {
    		return $firstData->toArray();
    	}
    }

    /**
     * Get user identity details by user id
     *
     * @var $userId int
     * 
     * @return array
     */
    public function getIdentityWithId($userId)
    {
    	$firstData = $this->where('id', $userId)->first();

    	if(! is_null($firstData)) {
    		return $firstData->toArray();
    	}
    }
}
