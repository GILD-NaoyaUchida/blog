<?php

session_start();

$_SESSION['email'] = $_POST['email'];


$dbh = new PDO ('mysql:dbname=blog; host=127.0.0.1;port=8889; charset=utf8', 'root', 'root');

$sql = "SELECT COUNT(*) as count FROM users where email = ? AND password = ? ORDER BY id DESC";
$stmt = $dbh->prepare($sql);

$stmt->bindValue(1, $_POST['email']);
$stmt->bindValue(2, $_POST['password']);
$stmt->execute();
$rows = $stmt->fetch();

if ($rows['count'] == 0) {
    $_SESSION['error'] = 'メールアドレスもしくはパスワードが一致しません';
    header('Location: ../../guest/view/sign_in.php');
    exit;
}

$_SESSION['is_login'] = true;

// ログイン情報が一致。
header('Location: ../../auth/view/post_index.php');
exit;