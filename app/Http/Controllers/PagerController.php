<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PagerController extends Controller
{
    public function home(Request $request)
    {


        return view('home');
    }
}
