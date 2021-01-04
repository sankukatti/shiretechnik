<?php
namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

class TrainingsController extends Controller {
    // public function getAllTrainings(Request $request) {
    //     /*Get json file which contains HVAC content*/
	// 	$path 				= storage_path() . "/json/trainings.json";
	// 	$json 				= json_decode(file_get_contents($path), true);
    // }
    public function getAllTrainings( Request $request ) {
		return view( 'pages.allTrainings' );
	}

    public function getTraining(Request $request, $training_id) {
        $path = storage_path() . "/json/trainings.json";
        $json = json_decode(file_get_contents($path), true);
        $directoryName 		= 'trainings/thermalManagement';
        $files = $this->getImageFiles($directoryName);

        return view( 'pages.training', [ 'json' => $json[$training_id], 'images' => $files ] );
    }

    function getImageFiles($directoryName) {
		/*Directory containing hvac image files*/
		$directory 			= public_path().'/images/'.$directoryName;
		/*Fetch all files from directory*/
		$imgFiles = File::files( $directory );
		$files = array();
		/*Get max 3 images from the directory*/
		$index = 0;
		foreach ($imgFiles as $key => $file) {

			if( $index > 2 ) break;
			$fileName = File::basename($file);
			$files[ $index++ ] = '/images/'.$directoryName.'/'.$fileName;
		}

		return $files;
	}
}

?>
