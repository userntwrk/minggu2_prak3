<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id)
    {
        return 'comment : <br>'.$id;
    }
}
