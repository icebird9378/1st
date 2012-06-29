<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Message Model
 * Handles CRUD for feching user info (just a test)
 */
class Model_User extends Model {
	// Table name used by this model
	protected $_table = 'vimilydemo_user';
	/**
	 * Adds a new user
	 * @param long userId
	 * @param string user's name
	 * @return Database
	 */
	public function add($userId, $screenName)
	{
		$data = array('userId', 'screenName', 'createDate');
		return DB::insert($this->_table, $data)
		->values($userId, $screenName, time())
		->execute();
	}
	/**
	 * Gets all users
	 *
	 * @return array
	 */
	public function get_all()
	{
		return DB::select()
		->from($this->_table)
		->execute()
		->as_array();
	}
	/**
	 * Deletes a user from the DB
	 * @param long userId
	 * @param string user's name
	 * @return Database
	 */
	public function delete($userId, $screenName)
	{
		return DB::delete($this->_table)
		->where('userId', '=', $userId)
		->execute();
	}
}