<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)//このRequestクラスは、ブラウザを通してユーザーから送られる情報をすべて含んでいるオブジェクトを取得してこれらの情報を$requestに代入して使用している。
    {
        $this->validate($request, Comic::$rules);
        //validateメソッドは第二引数News::$rulesまで指定されているこのComic::$rulesは、Comic.phpファイルの$rules変数を呼び出すための書き方になります。

        $comic = new Comic;
        //newはModelからインスタンス（レコード）を生成するメソッドになっています。新しく保存する場所を作成している。
        $form = $request->all();
        //validate()の第一引数にリクエストのオブジェクトを渡し、$request->all()を判定して、問題があるなら（この場合はタイトルなどが記載していないなど）、エラーメッセージと入力値とともに直前のページに戻る機能を持っています。

        unset($form['_token']);

        $comic->fill($form);
        $comic->save();

        return redirect ('/comic');
    }
    public function list(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          // 検索されたら検索結果を取得する
        $posts = Comic::where('title', $cond_title)->get();
        } else {
          // それ以外はすべてのコミックを取得する
        $posts = Comic::all();
        }
    return view('list', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Comic::$rules);

        $comic = Comic::find($request->id);

        $comic_form = $request->all();
        unset($comic_form['_token']);

        $comic->fill($comic_form)->comic();
        return redirect('/comic');
    }
    public function edit(Request $request)
    {
        $comic = Comic::find($request->id);
        if (empty($comic)) {
            abort(404);
        }
        return view('comic.list');
    }
    public function delete(Request $request)
    {
        $comic = Comic::find($request->id);

        $comic->delete();
        return redirect('/comic/list');
    }

    public function top()
    {
        return view('top');
    }
    public function result()
    {
        return view('result');
    }

    public function plus()
    {
        return view('listplus');
    }
    public function listview()
    {
        return view('list');
    }

}
