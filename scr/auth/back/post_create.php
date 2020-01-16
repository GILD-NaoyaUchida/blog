<?php
session_start();

$dbh = new PDO ('mysql:dbname=blog; host=127.0.0.1;port=8889; charset=utf8', 'root', 'root');

$sql = "SELECT * FROM users where email = ? ORDER BY id DESC";
$stmt = $dbh->prepare($sql);

$stmt->bindValue(1, $_SESSION['email']);
$stmt->execute();
$rows = $stmt->fetch();


$sql = "INSERT INTO article (user_id, title, content) VALUES (:user_id, :title, :content )";
$params = [
    ':user_id' => $rows['id'],
    ':title' => $_POST['title'],
    ':content' => $_POST['content']
];

if ($_POST['status'] == 2) {
    $sql = "INSERT INTO article (user_id, title, content, release_date) VALUES (:user_id, :title, :content, :release_date )";
    $params[':release_date'] = $_POST['reservation_date'];
}

$stmt = $dbh->prepare($sql);
$stmt->execute($params);

//遷移させる記述
header('Location: ../../auth/view/post_index.php');
exit;