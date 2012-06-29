
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Avatar extends Controller {
	//public $template = 'site';
	/* var $RESPONSE_UPLOAD = 'response_upload';
	public $SKIP_UPLOAD = 'skip_upload';
	var $ERROR_UPLOAD = 'error_upload'; */
	
	/*
	 * main page entry 
	 */
    public function action_index()
    {	
    	if($_POST && $_POST["commd"] != 'interal'){
    		
    		if($_POST["commd"] == 'searchTag'){
    			$tagName = $_POST["searchTagName"];
    		
    			$tag = new Model_Tag;
    			$tags = $tag->get_tag($tagName);
    			
    			$tags['status'] = 'OK';
    			$tags['length'] = $tag->count_tag($tagName);
    			$json_obj = json_encode($tags, JSON_FORCE_OBJECT);
    			echo $json_obj;
    		}else if($_POST["commd"] == 'saveTag'){
    			$tagName = $_POST["tagname"]; 
    			$photoName = $_POST["photoName"];
    			$tagX = $_POST["tagX"];
    			$tagY = $_POST["tagY"];
       			$this->_save_tag($tagName, $photoName, $tagX, $tagY);
    		}
    	}else{
        	$view = View::factory('avatar/index')->bind('photos', $photos);
       		$photos = $this->_fetch_image();
        	$this->response->body($view);
    	}
        
    }
    
    /*
     * private method of fetching tags
    */
 /*     private function _fetch_tag($tagName) {
    	$tag = new Model_Tag;
    	$tags = $tag->get_tag($tagName);
    	return $tags;
    } */
     
    
    /*
     * private method of saving tag 
    */
    private function _save_tag($tagName, $photoId, $tagX, $tagY) {
    	$tag = new Model_Tag;
    	$tags = $tag->add($tagName, $photoId, $tagX, $tagY);
    }
    
	
    /*
     * private method of fecthing image 
    */
    private function _fetch_image() {
    	$photo = new Model_Photo;
    	$photos = $photo->get_all();
    	return $photos;
    }
    
    /*
     * public method of image upload 
    */
    public function action_upload()
    {
        $view = View::factory('avatar/upload');
        $error_message = NULL;
        $filename = NULL;

        if ($this->request->method() == Request::POST)
        {
            if (isset($_FILES['avatar']))
            {
                $filename = $this->_save_image($_FILES['avatar']);
            }
        }

        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file. The max size of photo is 2M';
        }
        
        $view->uploaded_file = $filename;
        $view->imageName = $filename;
        $view->error_message = $error_message;
        $this->response->body($view);
    }
    
    /*
     * private method of recording image into database
    */
    private function _record_imageName($imageName) {
    	$photo = new Model_Photo;
    	$photos = $photo->add($imageName);
    }

    /*
     * private method of saving images into thumb format and normal format
    */
    private function _save_image($image) {
    	if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
		
        	$directory_thumb = DOCROOT.'public/thumbs/'; 
        	$photoSize_thumb = 75;
    
        	//print_r($image);
        	$directory_image = DOCROOT.'public/images/'; 
        	$photoSize_image = 500;
        
        	
        
        if ($file = Upload::save($image, NULL, $directory_image))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
			
            Image::factory($file)
                ->resize($photoSize_image, $photoSize_image, Image::AUTO)
                ->save($directory_image.$filename);  

            //print_r('saved '.$filename.' in '.$directory_image);
            // Delete the temporary file	
                     
            Image::factory($file)
            ->resize($photoSize_thumb, $photoSize_thumb, Image::NONE)
            ->save($directory_thumb.$filename);
            //print_r('saved '.$filename.' in '.$directory_thumb);
            
            $this->_record_imageName($filename);
            unlink($file);
            return $filename;
        }        
        return FALSE;
    }
}