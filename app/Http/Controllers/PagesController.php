<?php
namespace App\Http\Controllers;

use Log;
use File;
use Illuminate\Http\Request;

/**
*
*/
class PagesController extends Controller
{
	public function getHvac( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/hvac.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'hvac';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getAbout( Request $request ) {
		return view( 'pages.about' );
	}

	public function getCaeses( Request $request ) {
		/*Get json file which contains Caeses content*/
		$path 				= storage_path() . "/json/caeses.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'caeses';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getHcavProducts( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/hvacProducts.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'hvacProducts';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getcrTech( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/crtech.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'crtech';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getHcavServices( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/hvacServices.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'hvacServices';

		$files = $this->getImageFiles($directoryName);

		Log::info(print_r($json,1));
		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getThermal( Request $request ) {
		/*Get json file which contains Thermal content*/
		$path 				= storage_path() . "/json/thermal.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'thermal';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getTcfd( Request $request ) {
		/*Content is same as turbosoftware*/
		return view( 'pages.turboSoftware' );
	}

	public function getVisualdoc( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/visualdoc.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'visualdoc';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getMechDesign( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/mechDesign.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'mechDesign';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getReliability( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/reliability.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'reliability';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getConsumerProducts( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/consumer.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'consumer';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getGenesis( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/genesis.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'genesis';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getElecCooling( Request $request ) {
		/*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/elecCooling.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'elecCooling';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
	}

	public function getTurboSoftware( Request $request ) {
		return view( 'pages.turboSoftware' );
	}

	public function getfrdshipSystems ( Request $request ) {
		return view( 'pages.friendshipSystems' );
	}

	public function getVRand ( Request $request ) {
		return view( 'pages.vrand' );
	}

	public function getCfdsupport ( Request $request ) {
		return view( 'pages.turboSoftware' );
	}

	public function getCandrtech ( Request $request ) {
		/*Get json file which contains CRtech content*/
		$path 				= storage_path() . "/json/crtech.json";
		$json 				= json_decode(file_get_contents($path), true);
		$directoryName 		= 'crtech';

		$files = $this->getImageFiles($directoryName);

		return view( 'pages.allPages', [ 'images' => $files ,'json' => $json ] );
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
