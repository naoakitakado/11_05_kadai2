<?php
// var_dump($_GET);
// exit();
include('functions.php');

$id=$_GET['id'];

$pdo = connect_to_db();
$sql = 'DELETE FROM users_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header('Location:todo_read.php');
}
