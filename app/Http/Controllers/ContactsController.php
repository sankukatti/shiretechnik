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
		$email = $request->input('email');
		Log::info($email);
		$token = $request->input('token');
		$this->emailService->sendMail(['email' => $email], "info@shiretechnik.com", "sankukatti@gmail.com", "New Contact", 'email.newContact');
		return redirect('/');
	}
}

?>