<?php  
namespace App\Http\Controllers;

use Log;
use File;
use App\Http\Controllers\EmailService;
use Illuminate\Http\Request;

class CareersController extends Controller {
	
	protected $emailService;

	function __construct() {
        $this->emailService = new EmailService;
    }

	public function addProfile( Request $request ) {
		$name = $request->input('name');
		$email = $request->input('email');
		
		$file = null;



		if ($request->file('resume')->isValid()) {
			$file = array(
				'path' => $request->resume->path(),
				'name' => "resume.".$request->resume->extension(),
				'mime' => $request->resume->getClientMimeType()
			);	  
		}

		$token = $request->input('token');

		$this->emailService->sendMail(['name' => $name, 'email' => $email, 'txt' => "Please find the resume attached"], "info@shiretechnik.com", explode(',',env('NEW_CONTACT_MAIL_TO')), "New Profile", 'email.newContact', $file);
		$request->session()->flash('alert-success', 'Thank you. Will get in touch');
		return redirect('/');
	}

	function getCareers( Request $request ) {
		return view( 'pages.careers' );
	}
}

?>