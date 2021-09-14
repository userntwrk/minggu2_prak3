<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor()
    {
        return 'Sarana : perkantoran';
    }

    public function lab()
    {
        return 'Sarana : laboratorium';
    }

    public function kelas()
    {
        return 'Sarana : kelas';
    }

    public function dll()
    {
        return 'Sarana : lainnya';
    }
}
