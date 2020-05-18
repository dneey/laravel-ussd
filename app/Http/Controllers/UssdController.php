<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UssdController extends Controller
{
    public function callback()
    {
        Log::info('Ussd application');
        return 'done';
    }
}
