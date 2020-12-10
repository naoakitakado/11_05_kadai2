<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー追加画面</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>ユーザー登録画面</legend>
      <a href="todo_read.php">ユーザー一覧画面</a>
      <div>
        ユーザー名を入力してください: <input type="text" name="username">
      </div>
      <div>
        パスワードを入力してください: <input type="password" name="password">
      </div>
      <div>
        <button>登録</button>
      </div>
      <div>
        <input type="hidden" name="is_admin" value="0">
        <input type="hidden" name="id_deleted" value="0">
      </div>
    </fieldset>
  </form>
</body>

</html>