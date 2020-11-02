<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
public function add()
{
    return view('admin.comics.create');
}
public function create()
{
    return redirect('admin/comics/create');
}
public function edit()
{
    return view('admin.comics.edit');
}
public function update()
{
    return redirect('admin/comics/edit');
}

}
