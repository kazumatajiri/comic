<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>本の追加</title>
    <link href="{{ asset('css/add.css') }}" rel="stylesheet">
  </head>
  <body>
    <section class="content">
      <h1 class="page-title">本の追加</h1>
      @if (count($errors) > 0)
          <ul>
              @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
              @endforeach
          </ul>
      @endif
      <form>
        <p>
          <label for="title">作品名</label>
          <input type="text" id="title">
        </p>
        <p>
          <label for="author">作者名</label>
          <input type="text" id="author">
        </p>
        <p>
          <label for="publisher">出版社</label>
          <input type="text" list="company"placeholder="テキスト入力もしくはダブルクリック" autocomplete="off" id="publisher">
          <datalist id="company">
            <option value="週刊少年ジャンプ">
            <option value="週刊少年マガジン">
            <option value="週刊少年サンデー">
            <option value="週刊ヤングマガジン">
          </datalist>
        </p>
        <p>
          <label for="number">巻数</label>
          <input type="text" id="number">
        </p>
        <p>
          <label for="favorite">おすすめ度</label>
          <input type="text" id="favorite">
        </p>
        <p>
          <input type="submit" value="追加">
        </p>
      </form>
    </body>
</html>