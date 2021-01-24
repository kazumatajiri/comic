<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>本の更新</title>
    <link href="{{ asset('css/update.css') }}" rel="stylesheet">
  </head>
  <body>
    <h1>ワンピース
      <input type="number" name="comic_number"><!--検索したタイトル、巻数を表示-->
      巻
    </h1>
    <p>
          <input type="submit" value="更新"><!--更新してtop.blade.phpに戻る-->
    </p>
  </body>