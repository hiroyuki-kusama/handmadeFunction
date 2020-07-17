<?php
use Illuminate\Http\Form;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Insert title here</title>
</head>
<body>
<h1>値を入力してね</h1>
<form method="get" action="func">
@csrf
数字を入力してね(,で数字を区切ってね)<input type="text" name="stringFigure">
"昇"か"降"のどっちかを入力してね<input type="text" name="order"><br>
実行回数を入力してね(0未満は入力できないよ)<input type="number" name="kaisuu" min="0">

<button class="detail-button"  name="id">送信</button>
</form>
<?php
$a=-1;
$a--;
echo $a;
?>
</body>
</html>