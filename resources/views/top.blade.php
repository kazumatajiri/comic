<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>漫巻検索</title>
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
  </head>
  <body>
    <section class="content">
      <h1 class="page-title">漫巻検索</h1>
      <div class="search">
        <p>
          <form id="form1" action="自分のサイトURL">
          <input id="sbox"  id="s" name="s" type="text" placeholder="キーワードを入力" />
          <input id="sbtn" type="submit" value="検索" /><!--result.blade.phpへ-->
          </form>
        </p>
      </div>
          </form>
        <p>
            <a class="add_btn"href="http://127.0.0.1:8000/comic/add">本の追加<a><!--add.blade.phpへ-->
            <a class="update_btn" href="http://127.0.0.1:8000/comic/list">作品一覧</a><!--list.blade.phpへ-->
        </p>
    </section>
    </body>
</html>
