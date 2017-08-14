<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
	/**
	 * Send Contact email via Ajax
	 * @return [json] Sends email and provide json response
	 */
    public function sendContactEmail()
    {
    	$params = ['name' => $_GET['name'], 'email' => $_GET['email'], 'phone' => $_GET['phone'], 'email_body' => $_GET['message']];
      \Mail::send('emails.contactus', $params, function($message) {
        	$message->from($_GET['email']);
        	$message->to('info@hrm.com');
        	$message->replyto($_GET['email']);
        	$message->subject('Inquiry Contact Us Form: '.$_GET['name']);
    	});

      return response()->json(array('sending'=> 'sent'), 200);
   }
}
