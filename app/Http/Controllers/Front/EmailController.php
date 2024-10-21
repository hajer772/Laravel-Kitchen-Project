<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\MyEmail;

class EmailController extends Controller
{
    public function sendmessage(Request $request)
    {

        // Validate input data (adjust validation rules as needed)
        $request->validate([
            'userName' => 'required|string',
            'userMessage' => 'required|string',
            'userEmail' => 'required|email',
            'userSubject' => 'required|string',
        ]);

        $formData = [
            'userName' => $request->input('userName'),
            'userMessage' => $request->input('userMessage'),
            'userEmail' => $request->input('userEmail'),
            'userSubject' => $request->input('userSubject'),
        ];

        if ($formData !== null && !empty($formData['userEmail'])) {
            Mail::to($formData['userEmail'])->send(new MyEmail($formData));
        }

        return redirect()->back()->with('success', '');
    }
}
