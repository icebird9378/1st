<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tag extends Controller {

	public function action_fetchtag(){
		if($_REQUEST){	

			$tag = new Model_Tag;
			$tags = $tag->get_all();
			
			$tags['status'] = 'OK';
			$tags['length'] = $tag->count_all();
			$json_obj = json_encode($tags, JSON_FORCE_OBJECT);	
			echo $json_obj;
		}
	}
	
	protected function tag_json_encode($arr){
		if(function_exists("json_encode")){
			return json_encode($phparr);
		}
		else{
			require_once 'json/json.class.php';
			$json = new Services_JSON;
			return $json->encode($phparr);
		}
	}
}