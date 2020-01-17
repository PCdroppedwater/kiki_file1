<?php
//array関数を使ってトランプの画像名を配列で作成
$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

//0～13の範囲でランダムに数値を1つ取得
//ランダムに取得した数値のデータが変数に代入されている
$leftCard=mt_rand(0,13);

?>
<!DOCTYPE>
<html lang="ja">
<head>
<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
<title>High&Lowゲーム</title>
</head>

<body>
<div align="center">
<font size="8">High&Low&nbsp;ゲーム</font>
<hr><br>

<form action="highAndLowGame4.php"method="post">

<?php

//左側のトランプについて、配列を用いている。追加しているキーは
//ランダム関数を代入した変数$leftCardである。
echo'<img src="../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

//右側のトランプは、フォルダー、"cards"内にあるデータから出力されている。
echo'<img src="../cards/bg.png">';
?>
<br><br><input type="radio"name="select"value="High" checked>High

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio"name="select"value="Low">Low
<br><br><br><input type="submit"value="決定">

<?php
//隠しフォームにて、$leftCardのデータを送信
echo'<input type="hidden"name="leftCard"value="',$leftCard,'">';
?>
<br><br><br><br><br><br><br><br><br>

<a href="highAndLowGame1.php" class="returnHome" >タイトル画面に戻る</a>

</div>
</form>
</body>

<style>
.returnHome{
    color:black;
    padding:10px 15px 10px 15px;
    position:abusolute;
    top:100px;
    font-size:20px;
    text-decoration:none;
    border:1px solid black;
    background-color:rgba(255,255,0,1); /*yellow*/
    border-radius:50px;
}

.returnHome:hover{
    background-color:rgba(255,255,0,0.3);  /*yellow  透明度0.3*/
}
</style>

</html>