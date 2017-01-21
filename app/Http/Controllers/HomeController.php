<?php  
namespace App\Http\Controllers;

use Log;
use File;
use Illuminate\Http\Request;

class HomeController extends Controller {
	
	public function get( Request $request ) {
		
		/*Get sliderImageMeta.json*/
		$path = storage_path() . "/json/sliderImageMeta.json";
		$json = json_decode(file_get_contents($path), true); 
		
		/*Directory containing slider files*/
		$directory = public_path().'/images/slider';
		/*Fetch all files from directory*/
		$files = File::allFiles( $directory );
		/**Get all files from the directory to show into slider.
		* Read through the json, indexed by image name to get more details for the images.
		*/
		foreach ($files as $key => $file) {
			$files[ $key ] = array();
			$files[ $key ][0] = $file->getFileName();
			
			$fileName = explode( '.', $file->getFileName() )[0];
			if( isset( $json[ $fileName ] ) )
				$files[ $key ][1] = $json[ $fileName ];
		}


		/*Log::info(print_r($files,1));*/
		return view( 'home.home', [ 'files' => $files ] );	
	}
}

?>