<?php
	/*
		*** InstaPack v1.0 ***  
		This library is developed solely for Educational Purpose.  
		I do not motivate any of the user of this library to misuse it in any of the ways.  
		If found, will be held responsible, no involvement of mine will be there at all!  
		Enjoy! Learn! Don't Misuse!  
		For more such applications & Help:-  
		*******************************************  
		* Github  :- https://github.com/suraj2334 *  
		* Website :- http://suraj-mundalik.info   *  
		*******************************************  
	*/
	class InstaPack{
		/*
			Method to Retrieve the Full Size Profile Pic from,
			the Username passed in $post_url
		*/
		function Fetch_Profile_Picture($username){
			$username = addslashes(trim($username));
			$src = @file_get_contents("https://www.instagram.com/".$username."/");
			if($src != FALSE){
				$extract = strstr($src, '"profile_pic_url":');
				$extract = strstr($extract, ':');
				$i = 3;
				$url ="";
				while($extract[$i] != '"'){
					$url .= $extract[$i++];
				}
				$url = str_replace('s150x150/', '', $url);
				$image =  base64_encode(file_get_contents(trim($url)));
				return '<img src="data:image/jpg;base64,'.$image.'" />';				
			}
			return 'Unable to retrieve the Profile Picture.';
		}
		/*
			Method to Retrieve the Post Image from,
			the Share URL of Instagram Post passed in $post_url
		*/
		function Fetch_Post_Image($post_url){
			$src = NULL;
			$meta_image_val = NULL;
			$url = NULL;
			$src = @file_get_contents("$post_url");		
			if($src != FALSE ){
				$dom = new DOMDocument();			
				$dom->loadHTML($src);
				foreach($dom->getElementsByTagName('meta') as $meta) {
					if($meta->getAttribute('property')=='og:image'){ 
					    $meta_image_val = $meta->getAttribute('content');
					}
					if($meta_image_val != NULL){
						break;
					}
				}				
				if($meta_image_val != NULL){
					$url = $meta_image_val;					
					$image = base64_encode(file_get_contents(trim($url)));
					if(isset($url)){ 
						return '<img src="data:image/jpg;base64,'.$image.'" />';
					}
				}
			}
			return 'Unable to retrieve the Post Image.';
		}
		/*
			Method to Retrieve the Post Video from,
			the Share URL of Instagram Post passed in $post_url
		*/
		function Fetch_Post_Video($post_url){
			$src = NULL;
			$meta_image_val = NULL;
			$meta_video_val = NULL;
			$url = NULL;
			$src = @file_get_contents($post_url);
			if( !($src == FALSE) ){
				$dom = new DOMDocument();			
				$dom->loadHTML($src);
				foreach($dom->getElementsByTagName('meta') as $meta) {
					if($meta->getAttribute('property')=='og:image'){ 
					    $meta_image_val = $meta->getAttribute('content');
					}
					if($meta->getAttribute('property')=='og:video'){ 
					    $meta_video_val = $meta->getAttribute('content');
					}
					if($meta_image_val != NULL && $meta_video_val != NULL ){
						break;
					}
				}
				if($meta_video_val != NULL){
					$url = $meta_video_val;
					$video = base64_encode(file_get_contents(trim($url)));
					if(isset($url)){
						return '<video controls><source type="video/mp4" src="data:video/mp4;base64,'.$video.'">Your browser is not supported.</video>';
					}
				}
			}
			return 'Unable to retrieve the Post Video.';
		}		
	}
	/*
		Keep Supporting! If you have reached this line you really are desperate man! :-P
	*/
?>