<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudiController extends Controller
{
    public function mi()
    {
        return view('studi.mi');
    }

    public function ti()
    {
        return view('studi.ti');
    }
}
