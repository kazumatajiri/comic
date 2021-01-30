<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>本の詳細</title>
    <link href="{{ asset('css/listplus.css') }}" rel="stylesheet">
  </head>
  <body>
    <h1>本の詳細</h1><!--listでクリックした内容を細かく表示-->
    <form action="{{action('ComicController@update')"method="post">
      @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
      </ul>
      @endif
      <label class="col-md-2" for="title">タイトル</label>
      <input type="text" class="form-control" name="title" value="{{ $comic_form->title }}">
      <label class="col-md-2" for="title">作者</label>
      <input type="text" class="form-control" name="author" value="{{ $comic_form->title }}">
      <label class="col-md-2" for="title">出版社</label>
      <input type="text" class="form-control" name="publisher" value="{{ $comic_form->title }}"><label class="col-md-2" for="title">巻数</label>
      <input type="text" class="form-control" name="number" value="{{ $comic_form->title }}"><label class="col-md-2" for="title">お気に入り度</label>
      <input type="text" class="form-control" name="favorite" value="{{ $comic_form->title }}">
      {{ csrf_field()}}
      <input type="submit" class="btn btn-primary"value="更新">
    </form>
    <a href="{{ action('ComicController@listview')  }}">リストへ</a><!--list.blade.phpへ-->
    <a href="{{ action('ComicController@delete', ['id' => $comic->id )}}">削除</a><!--内容を削除してlist.blade.phpへ戻る-->
      @endforeach
  </body>