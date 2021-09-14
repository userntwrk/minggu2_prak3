<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudiController extends Controller
{
    public function mi()
    {
        return 'Prodi : Manajemen Informatika';
    }

    public function ti()
    {
        return 'Prodi : Teknik Informatika';
    }
}
