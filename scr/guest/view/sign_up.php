<?php
session_start();
if (isset($_SESSION['is_login'])) {
    if ($_SESSION['is_login'] === true) {
        header('Location: ../../auth/view/post_index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../css/pages/all.css">
  <link rel="stylesheet" href="../../../css/pages/guest/sign_up.css">
  <script type="text/javascript" src="../../../javascript/pages/guest/sign_up.js"></script>
  <title>新規会員登録画面</title>
</head>
<body>
<?php require("../../component/guest/header_bar.php"); ?>
<section>
  <div class="container">
    <div class="login-form">
      <h3>新規会員登録</h3>
      <form method="post" action="../back/sign_up.php">
        <input type="text" name="nickname" placeholder="ユーザー名"/>
        <input type="text" name="email" placeholder="abcdef@example.com"/>
        <input type="password" name="password" placeholder="パスワード(半角英数)"/>
        <p><input type="submit" value="会員登録"/></p>
      </form>
    </div>
    <a class="signin" href="sign_in.php">ログイン画面へ</a>
  </div>
</section>
<?php require("../../component/guest/footer_bar.php"); ?>
</body>
</html>