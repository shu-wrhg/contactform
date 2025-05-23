<!doctype HTML>
<html lang="ja">

<head>
    <meta charset=utf-8>
<title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問合わせ内容確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br>よろしければ「送信する」ボタンを押してください。
        </p>
        <p>名前
            <br>
            <!-- index.htmlからpostされたnameという箱を指示する -->
            <?php echo $_POST['name'];?>
        </p>

        <p>メールアドレス
            <br>
            <?php echo $_POST['mail'];?>
        </p>

        <p>年齢
            <br>
            <?php echo $_POST['age'];?>
        </p>

        <p>コメント
            <br>
            <?php echo $_POST['comments'];?>
        </p>

        <!-- 問い合わせに戻るボタンを作成 -->
        <div class="buttons">
        <!-- action="XXX"=リンク先のURL（ファイル名） -->
            <form action="index.html">
                <!-- value="XXX"=ボタン上に表示されるテキスト -->
                <input type="submit" class="button1" value="戻って修正する"/>
            </form>

            <form action="insert.php" method="post">
            <!-- ↑なぜmethod/actionが逆？ -->
                <input type="submit" class="button2" value="登録する"/>
                <input type="hidden" value="<?php echo $_POST['name'];?>"name="name">
                <input type="hidden" value="<?php echo $_POST['mail'];?>"name="mail">
                <input type="hidden" value="<?php echo $_POST['age'];?>"name="age">
                <input type="hidden" value="<?php echo $_POST['comments'];?>"name="comments">
                <!-- type="hidden"で内容を隠す（webに表示しない） -->
            </form>
        </div>
    </div>
</body>
</html>