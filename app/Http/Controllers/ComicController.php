<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function add()
    {
        return view('add');
    }
    public function index()
    {
        return view('top');
    }
    public function result()
    {
        return view('result');
    }
}
