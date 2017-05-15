<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormConfirmation;
use App\Mail\ContactFormNotification;
use Illuminate\Http\Request;
use Mail;

class ContactFormController extends Controller
{
    /**
     * Validate and send a notification of contact.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->has('no_bots_please')) {
            // TODO: Log IP and User Agent String.
            return response()->json(['message' => 'No bots please'], 401);
        }

        $this->validate($request, [
            'name'    => ['required', 'min:3', 'max:255'],
            'email'   => ['required', 'email'],
            'message' => ['required', 'min:10'],
        ]);

        // Send email to contact.
        $confirmationMessage = new ContactFormConfirmation($request->input('name'));
        Mail::to($request->input('email'))
            ->queue($confirmationMessage);

        // Send email to me.
        $notificationMessage = new ContactFormNotification(
            $request->input('name'),
            $request->input('email'),
            $request->input('message')
        );
        Mail::to(config('mail.my_address'))
            ->queue($notificationMessage);

        return response()->json(['message' => 'Form request successful']);
    }
}
