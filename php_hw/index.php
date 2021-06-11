<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8"><title>Today's Movie</title>
<link rel="stylesheet" href="css/style.css"></head>
<body>
<div>
<img src="img/amelie.jpg" width="100px" height="200px">
<img src="img/forrestgump.jpg" width="100px" height="200px">
<img src="img/future.jpg" width="100px" height="200px">
<img src="img/hands.jpg" width="100px" height="200px">
<img src="img/harry.jpg" width="100px" height="200px">
<img src="img/mygirl.jpg" width="100px" height="200px">
<img src="img/notebook.jpg" width="100px" height="200px">
<img src="img/call.jpg" width="100px" height="200px">
<img src="img/the.jpg" width="100px" height="200px">
<img src="img/summer.jpg" width="100px" height="200px">
<img src="img/bird.jpg" width="100px" height="200px">
<img src="img/roma.jpg" width="100px" height="200px">
<img src="img/romeo.jpg" width="100px" height="200px">
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<h1>今日のおすすめ作品</h1>";
$random = mt_rand(1, 13);
if($random === 1){
    echo "<div>";
    echo '<img src="img/amelie.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "<div>";
    echo "<p>アメリ</p>";
    echo "</div>";
}elseif($random === 2){
    echo '<img src="img/forrestgump.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "<p>フォレスト・ガンプ</p>";
}elseif($random === 3){
    echo '<img src="img/future.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "<p>バックトゥザフューチャー</p>";
}elseif($random === 4){
    echo '<img src="img/hands.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "<p>シザーハンズ</p>";
}elseif($random === 5){
    echo '<img src="img/harry.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "<p>ハリー・ポッター</p>";
}elseif($random === 6){
    echo '<img src="img/mygirl.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "<p>マイガール</p>";
}elseif($random === 7){
    echo '<img src="img/notebook.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "</div>";
    echo "<p>ララランド</p>";
}elseif($random === 8){
    echo '<img src="img/call.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "</div>";
    echo "<p>君の名前で僕を呼んで</p>";
}elseif($random === 9){
    echo '<img src="img/roma.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "</div>";
    echo "<p>ローマの休日</p>";
}elseif($random === 10){
    echo '<img src="img/romeo.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "</div>";
    echo "<p>ロミオとジュリエット</p>";
}elseif($random === 11){
    echo '<img src="img/the.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "</div>";
    echo "<p>マトリックス</p>";
}elseif($random === 12){
    echo '<img src="img/bird.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "</div>";
    echo "<p>レディバード</p>";
}elseif($random === 13){
    echo '<img src="img/summer.jpg" alt="" width="400px" height="700px">';
    echo "<br/>";
    echo "</div>";
    echo "<p>ミッドナイトサマー</p>";
}

?>
</body>
</html>
