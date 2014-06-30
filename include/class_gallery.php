<?php

namespace Gallery;

class Image_gallery{
	
	public $path;
	
	public function __construct(){
		
	}
	
	public function setPath($path){
	
		if(substr($path, -1) == '/'){
			$path = substr($path,0,-1);
			$this->path = $path;
			}
		return ($this->path);
	}
	private function getDirectory($path){
		return scandir($path);
	}	
	public function getImages(){
		$extensions = array('jpg','png','jpeg','pjpeg');
		$images = $this->getDirectory($this->path);
		foreach($images as $index=>$image){
			$temp = explode('.',$image);
			$extension = strtolower(end($temp));
			if(!in_array($extension,$extensions)){
				unset($images[$index]);
			}
			else{
				$images[$index] = array('full'=>$this->path.'/'.$image,'thumb'=>$this->path.'/thumbs/'.$image);
			}
		}
		return $images;
		//return (count($images) ? $images : false);
		
	}
}