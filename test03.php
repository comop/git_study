<?php
$answer = $_GET['answer'];

if ($answer == 'yes') {
	$message = 'よかったです';
} else {
	$message = '残念です。またトライしてください';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>結果</title>
</head>
<body>
<p>メッセージ</p>
<p><?php echo $message; ?></p>
<br>
<a href="test01.php">最初に戻る</a>
</body>
</html>
