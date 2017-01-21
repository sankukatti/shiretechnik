<?php  
namespace App\Http\Controllers;

use Log;
use File;
use Illuminate\Http\Request;

class ForumController extends Controller {
	
	public function getBlogs( Request $request ) {
		
		/*Get json file which contain all blogs*/
		$path 				= storage_path() . "/json/blogs.json";
		$json 				= json_decode(file_get_contents($path), true);		

		return view( 'pages.blogs', [ 'json' => $json ] );	
	}

	public function getBlog( Request $request, $blog_id ) {
		
		/*Get json file which contain all blogs*/
		$path 				= storage_path() . "/json/blogs.json";
		$json 				= json_decode(file_get_contents($path), true);		

		Log::info(print_r($json[ 'blogs' ],1));
		foreach ($json[ 'blogs' ] as $key => $value) {
			if( $value['urlKey'] == $blog_id ) {
				return view( 'pages.allPages', [ 'json' => $value ] );	
			}
		}
		
	}
}

?>