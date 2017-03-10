<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$month =$_POST["month"];
?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>

<body>
書き込みを行います。<br>
</body>

<?php
$str = $name.",".$mail.",".$month."\n";
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>

</html>