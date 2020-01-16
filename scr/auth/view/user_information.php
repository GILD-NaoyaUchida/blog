<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../css/pages/all.css">
    <link rel="stylesheet" href="../../../css/pages/auth/user_information.css">
    <script type="text/javascript" src="../../../javascript/pages/auth/user_information.js"></script>
    <title>ユーザー情報変更画面</title>
</head>
<body>
<?php require ("../../component/auth/header_bar.php");?>
<section>
    <div class="container">
        <div class="login-form">
            <h3>ユーザー情報変更</h3>
            <form>
                <a href="user_information.php"><img src="../../../images/common/user.png" width="100px" height="100px" alt="user-image">
                    <p>ユーザーネームさん</p>
                </a>
                <input type="text" name="" placeholder="abcdef@example.com">
                <input type="password" name="" placeholder="パスワード(半角英数)">
            </form>
        </div>
        <p><input type="submit" name="" value="変更"></p>
        <a class="signin" href="post_index.php">戻る</a>
    </div>
</section>
<?php require ("../../component/auth/footer_bar.php");?>
</body>
</html><?php
