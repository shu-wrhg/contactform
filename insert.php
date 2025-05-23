<?php

mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");

$sql="insert into contactform(name,mail,age,comments) values(?,?,?,?)";
// 変数sqlにSQL文を文字列として代入（insert文)
// ただしvalue内には？を記述、具体的な値は書かない
$stmt=$pdo->prepare($sql);
// 変数stmtにSQL文を格納する（prepare)
$stmt->bindValue(1, $_POST['name']);
// 最初の?に値を設定(mail_confirmから渡された名前の値)
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['age']);
$stmt->bindValue(4,$_POST['comments']);

$stmt->execute();
// 指定されたDBのテーブルに対してSQL文を実行

?>

<!-- mb_internal_encoding("utf8");　文字化けしないための決まり文句
     $pdo=new PDO　DBと接続するための決まり文句
     mysql;dbname=lesson01;　MYSQLに接続・データベースlesson01を利用する
     host=localhost;　DB用のサーバー名
     "root",""　サーバーへ接続する際のユーザ名・パスワード（winodwsはこの書き方）
 -->

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合せフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問合せフォーム</h1>

    <div class="confirm">
        <p>
            お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>
</body>
</html>