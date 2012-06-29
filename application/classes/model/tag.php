<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Photo Model
 *
 */
class Model_Tag extends Model {
	// Table name used by this model
	protected $_table = 'vimilydemo_tag';
	/**
	 * Adds a new tag
	 * @param long tagId
	 * @param string tag's name
	 * @return Database
	 */
	public function add($tagName, $photoName, $tagX, $tagY){
		$data = array('photoName', 'tagName', 'tagX', 'tagY');
		return DB::insert($this->_table, $data)
		->values(array($photoName, $tagName, $tagX, $tagY))
		->execute();
	}
	
	public function get_all(){
		return DB::select()
		->from($this->_table)
		->execute()
		->as_array();
	}
	
	public function count_all()
	{
		return DB::select()
		->from($this->_table)
		->execute()->count();
	}

	/**
	 * Gets tag/tags
	 *
	 * @return array
	 */
	public function get_tag($tagName)
	{
		return DB::select()
		->from($this->_table)
		->where('tagName', '=', $tagName)
		->execute()
		->as_array();
	}
	
	/**
	 * Gets tag/tags
	 *
	 * @return array
	 */
	public function count_tag($tagName)
	{
		return DB::select()
		->from($this->_table)
		->where('tagName', '=', $tagName)
		->execute()->count();
	}
	
	/**
	 * Deletes a tag from the DB
	 * @param long tagId
	 * @param string tag's name
	 * @return Database
	 */
	public function delete($tagId)
	{
		return DB::delete($this->_table)
		->where('tagId', '=', $tagId)
		->execute();
	}
}