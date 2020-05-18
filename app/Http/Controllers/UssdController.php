<?php

namespace App\Http\Controllers;

use Log;

class UssdController extends Controller
{
    public function callback()
    {
        Log::info('Ussd application');
        return 'done';
    }
}
