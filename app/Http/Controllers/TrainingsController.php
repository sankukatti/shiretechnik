<?php
namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

class TrainingsController extends Controller {
    public function getCases(Request $request) {
        /*Get json file which contains HVAC content*/
		$path 				= storage_path() . "/json/trainings.json";
		$json 				= json_decode(file_get_contents($path), true);
}
?>
