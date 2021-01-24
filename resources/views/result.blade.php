<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>検索結果</title>
    <link href="{{ asset('css/result.css') }}" rel="stylesheet">
  </head>
  <body>
     <section class="content">
      <h1 class="page-title">結果</h1>
      <p>ただいま<strong>ワンピース<!--検索した内容を表示--></strong><span>52巻<!--検索した巻数を表示 --></span></p>
      <button>削除</button><!--削除してtop.blade.phpに戻る-->
      <button>更新</button><!--更新してtop.blade.phpに戻る-->
     </section>
  </body>
</html>