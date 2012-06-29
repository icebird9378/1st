<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
	
	//private $
	public function action_index()
	{
		
		if($_POST){
			print_r($_POST['name']);
		}
		$content = View::factory('welcome')->bind('users', $users);
		$user = new Model_User;
		$users = $user->get_all();
		echo $users[1]['screenName'];
		echo $users[1]['createDate'];
		$this->response->body($content);
		//$this->template->content = $content;
	}
}