<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Send and email to me!
     */
    public function index(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'min:10']
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $contactRequest = ContactRequest::create([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);

        $contactMessage = "You have a new message from: "
         . htmlspecialchars($name)
         . " , email: "
         . htmlspecialchars($email)
         . "<br>"
         . htmlspecialchars($message);

        $success = mail('my-email@example.com', 'New message', $contactMessage);
        
        return [
            'sent' => $success,
            'contact_request' => $contactRequest->toArray()
        ];
    }
}
