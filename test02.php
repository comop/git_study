<?php
$num01 = $_GET['num01'];
$num02 = $_GET['num02'];
$operators = $_GET['operators'];
if (empty($num01) || empty($num02)) {
	$answer = '数字を入力していない項目があります';
} else {
	if (is_numeric($num01) && is_numeric($num02)) {
		switch ($operators) {
			case "plus":
				$answer = $num01 + $num02;
				break;
			case "minus":
				$answer = $num01 - $num02;
				break;
			case "times":
				$answer = $num01 * $num02;
				break;
		}
	} else {
		$answer = '数字以外が含まれています';
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>計算結果</title>
</head>
<body>
<p>結果：<?php echo $answer; ?></p>
<br>
<p>結果は正しいですか？</p>
<p>'はい'か'いいえ'を選択してください</p>
<form action="test03.php" method="GET">
<p>
<input type="radio" name="answer" value="yes" required>はい
<input type="radio" name="answer" value="no">いいえ
</p>
<p><input type="submit" value="送信する"></p>
</form>
<br>
<a href="test01.php">最初へ戻る</a>
</body>
</html>

