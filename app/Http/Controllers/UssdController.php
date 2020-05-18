<?php

namespace App\Http\Controllers;

use Log;

class UssdController extends Controller
{
    public function callback()
    {
        Log::info('Ussd application');
       return response()->json(['success' => 1])
       ->withHeaders([
           'Access-Control-Allow-Origin' => 'http://apps.Hubtel.com',
       ]);
    }
}
