<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>計算</title>
</head>
<body>
<p>半角数字を入力してください</P>
<form action="test02.php" method="GET">
<p>
数字1<input type="test" name="num01">
<select name="operators">
<option value="plus">+</option>
<option value="minus">-</option>
<option value="times">x</option>
<option value="divide">÷</option>
</select>
数字2<input type="text" name="num02">
<input type="submit" value="送信">
</p>
</form>
</body>
</html>
