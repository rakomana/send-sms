<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
        // return $request;
        Nexmo::message()->send([
            'to' => '27' . $request->mobile,
            'from' => '0720606418',
            'text' => 'Motion has been detected.'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('/');
    }
}
