<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Insert title here</title>
</head>
<body>
<h1>入力した数字を並べ替えたよ</h1>
@foreach($kekka as $r)
{{ $r }}
@endforeach
<br>
<p>実行回数{{ $kaisuu }}</p>
<p>処理時間{{ $looptime }}</p>
</body>
</html>