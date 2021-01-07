<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function add()
    {
        return view('add');
    }
    public function create()
    {
        $this->validate($request, Comic::$rules);

        $comic = new Comic;
        $form = $request->all();

        unset($form['_token']);
        unset($form['image']);

        $news->fill($form);
        $news->save();

        return redirect('top');
    }
    public function list(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          // 検索されたら検索結果を取得する
        $posts = comic::where('title', $cond_title)->get();
        } else {
          // それ以外はすべてのコミックを取得する
        $posts = comic::all();
    }
    return view('list', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    public function index()
    {
        return view('top');
    }
    public function result()
    {
        return view('result');
    }
    public function update()
    {
        return view('update');
    }

}
