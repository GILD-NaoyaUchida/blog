<?php

session_start();

$_SESSION['email'] = $_POST['email'];

//①DB接続
$dbh = new PDO ('mysql:dbname=blog; host=127.0.0.1;port=8889; charset=utf8', 'root', 'root');

//②DBのどのテーブルのどのカラムに値を追加するかの記述
$sql = "INSERT INTO users (nickname, email, password) VALUES (:nickname, :email, :password )";

//③　②を実行するための記述
$stmt = $dbh->prepare($sql);

//④キーに入れた値を取得するための記述
$params = [
    ':nickname' => $_POST['nickname'],
    ':email' => $_POST['email'],
    ':password' => $_POST['password']
];

//⑤　④を実行するための記述
$stmt->execute($params);

$_SESSION['is_login'] = true;

//遷移させる記述
header('Location: ../../auth/view/post_index.php');
exit;