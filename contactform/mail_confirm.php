<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問合せフォーム</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>


<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
        <p>
        お問い合わせ内容はこちらでよろしいでしょうか？<br>
        よろしければ「送信する」ボタンを押して下さい。
        </p>
        <p>
            <label>名前</label><br>
            <?php echo $_POST['name'];?>
        </p>

        <p>
            <label>メールアドレス</label><br>
            <?php echo $_POST['mail'];?>
        </p>

        <p>
            <label>年齢</label><br>
            <?php echo $_POST['age'];?>
        </p>

        <p>
            <label>コメント</label><br>
            <?php echo $_POST['comment'];?>
        </p>

        <form action="index.html">
            <input type="submit" class="box1" value="戻って修正する">
        </form>

        <form action="insert.php" method="POST">
            <input type="submit" class="box2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comment'];?>" name="comment">
        </form>
    </div>
</body>
