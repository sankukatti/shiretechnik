<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class EmailService
{
    /**
     * @param Email $email
     * @param string $template
     * @return bool
     * @throws \Exception
     */
    public function sendSignUpMail($params, $from, $to, $subject, $template = 'email.signup')
    {
        $this->sendMail($params, $from, $to, $subject, $template);
            
        return true;
    }

    /**
     * @param Email $email
     * @param string $template
     * @return bool
     * @throws \Exception
     */
    public function sendForgotPwdMail($params, $from, $to, $subject, $template='email.forgotPwd')
    {
        $this->sendMail($params, $from, $to, $subject, 'email.forgotPwd');
            
        return true;
    }

    public function sendMail($params, $from, $to, $subject, $template, $attachment = null ) {
        try {
            Mail::send($template, $params, function ($msg) use ($from, $to, $subject, $attachment) {
                if ($from) {
                    $msg->from([$from]);
                }
                $msg->to($to);
                $msg->subject($subject);
                if( $attachment != null ) {
                    $msg->attach($attachment['path'], ['as' => $attachment['name'], 'mime' => $attachment['mime']]);
                }
            });
        } catch (\Exception $e) {
            throw $e;
        }
    }
}