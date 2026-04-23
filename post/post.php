<?php

$name = $_POST['name'];

//性別
$gender = $_POST['gender'];
if($gender == "man") {
    $gender = "男性";
} else if($gender == "woman") {
    $gender = "女性";
} else {
    $gender = "不正な値です。";
}

//評価
$tmp_star = intval($_POST['star']); //整数として受け取る
$star = '';//画面に出力する用の文字列
if($tmp_star < 1 || $tmp_star > 5) { //1~5であるかのチェック
    $star_star = "不正な値です";
} else {
    for($i = 0; $i < $tmp_star; $i++) {
        $star .= '★';//送信あれた数だけ星を追加
    }

    for(; $i < 5; $i++) {
        $star .= '☆';//「5-送信された数字」の分だけ☆を追加
    }
}

$other = $_POST['other'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
</head>
<body>
    <h1>アンケート結果</h1>
    <p>お名前:<?php echo $name; ?></p>
    <p>性別:<?php echo $gender; ?></p>
    <p>評価:<?php echo $star; ?></p>
    <p>ご意見:<?php echo nl2br($other); ?></p>
</body>
</html>