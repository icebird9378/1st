<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Photo Model
 * 
 */
class Model_Photo extends Model {
	// Table name used by this model
	protected $_table = 'vimilydemo_photo';
	/**
	 * Adds a new photo
	 * @param long photoId
	 * @param string photo's name
	 * @return Database
	 */
	public function add($photoName)
	{
	
		$data = array('photoName');
		return DB::insert($this->_table, $data)
		->values(array($photoName))
		->execute();
	}
	/**
	 * Deletes a photo from the DB
	 * @param long photoId
	 * @param string photo's name
	 * @return Database
	 */
	public function delete($photoId)
	{
		return DB::delete($this->_table)
		->where('photoId', '=', $photoId)
		->execute();
	}
	/**
	 * Gets all photos
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
	 * Gets a signle photo
	 *
	 * @return array
	 */
	public function get_photo($photoId)
	{
		return DB::select()
		->from($this->_table)
		->where('photoId', '=', $photoId)
		->execute()
		->as_array();
	}
	/**
	 * Count number of photos
	 *
	 * @return array
	 */
	public function count()
	{
		return DB::select()
		->from($this->_table)
		->execute()->count();
	}
	
}