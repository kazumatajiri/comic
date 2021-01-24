<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>作品一覧</title>
    <link href="{{ asset('css/list.css') }}" rel="stylesheet">
  </head>
  <body>
    <h1>コミック作品一覧</h1><!--テーブルに保存した内容を表示-->
    <a href="{{ action('ComicController@add')  }}">作品追加</a><!--add.blade.phpへ-->
    <form action="{{ action('ComicController@list') }}" method="get">
      <label class="col-md-2">タイトル</label>
      <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="検索">
      <table class="table table-dark">
          <thead>
            <tr>
              <th width="10%">ID</th>
              <th width="20%">タイトル</th>
              <th width="20%">作者</th>
              <th width="20%">出版社</th>
              <th width="20%">巻数</th>
              <th width="20%">おすすめ度</th>
            </tr>
          </thead>
      </table>
    </form>
    <a>トップページへ</a><!--top.blade.phpへ-->
  </body>

