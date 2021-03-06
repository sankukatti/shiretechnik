<?php  
namespace App\Http\Controllers;

use Log;
use File;
use App\Http\Controllers\EmailService;
use Illuminate\Http\Request;

class ContactsController extends Controller {
	
	protected $emailService;

	function __construct() {
        $this->emailService = new EmailService;
    }

	public function sendContact( Request $request ) {
		$name = $request->input('name');
		$email = $request->input('email');
		$message = $request->input('messageTxt')."";
		$token = $request->input('token');
		Log::info($message);
		$this->emailService->sendMail(['name' => $name, 'email' => $email, 'txt' => $message], "info@shiretechnik.com", explode(',',env('NEW_CONTACT_MAIL_TO')), "New Contact", 'email.newContact');
		$request->session()->flash('alert-success', 'Thank you. Will get in touch');
		return redirect('/contact');
	}

	public function getContact( Request $request ) {
		return view( 'pages.contact' );
	}
}

?>