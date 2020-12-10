<?php

include('functions.php');
$id = $_GET['id'];

$pdo = connect_to_db();
$sql = 'SELECT * FROM users_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
  // var_dump($record);
  // exit();
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録編集画面）</title>
</head>

<body>
  <form action="todo_update.php" method="POST">
    <fieldset>
      <legend>ユーザー登録編集画面</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        ユーザー名: <input type="text" name="username" value="<?= $record["username"] ?>">
      </div>
      <div>
        パスワード: <input type="text" name="password" value="<?= $record["password"] ?>">
      </div>
      <div>
        <button>更新</button>
      </div>
      <input type="hidden" name="id" value="<?= $record['id'] ?>">
    </fieldset>
  </form>

</body>

</html>