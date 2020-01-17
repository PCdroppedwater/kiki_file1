<?php
//array関数を使ってトランプの画像名を配列で作成
$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

//0～13の範囲でランダムに数値を1つ取得
//ランダムに取得した数値のデータが変数に代入されている
$leftCard=mt_rand(0,13);
$rightCard=mt_rand(0,13);

//フォームのPOST送信データを各変数に代入
$left=$_POST['leftCard'];//ランダムに取得した数値、左側のカード
$radio=$_POST['select'];//ラジオボタンにて選択したデータ（High or Low)

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

<?php
//左側のトランプについて、配列を用いている。追加しているキーは
//ランダム関数を代入した変数$leftCardである。
echo'<img src="../cards/',$cards[$left],'">&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

//右側のトランプは、フォルダー、"cards"内にあるデータから出力されている。
echo'<img src="../cards/',$cards[$rightCard],'">';
?><br><br>
<?php
echo'「', $radio,'」','を選択しました';
?><br><br>
<?php
//「左のランダム数値＜右のランダム数値」の条件式を満たす場合、「$result="High";」を処理する
if($left<$rightCard){
    $result="High";
}
//「左のランダム数値＞右のランダム数値」の条件式を満たす場合、「$result="Low";」を処理する
elseif($left>$rightCard){
    $result="Low";
}
//上記以外の場合は、「$result=ラジオボタンの選択情報」==$radioを処理する
else{
    $result=$radio;
}
//ラジオボタンの選択情報と$resultの値が同じ場合、「You Win!」と表示する
if($radio==$result){
    echo"You Win!";
}
//ラジオボタンの選択情報と$resultの値が同じでない場合、「You Lose...」と表示する
else{
    echo"You Lose...";
}
?><br><br><br><br><br>
<a href="highAndLowGame3.php" class="btn tryAgain">もう一度挑戦</a>


<br><br><br><br><br><br><br><br><br>
<a href="highAndLowGame1.php" class="btn return2" >タイトル画面に戻る</a>
</div>

<style>
.btn{
    color:black;
    padding:10px 15px 10px 15px;
    font-size:20px;
    text-decoration:none;
    border:1px solid black;
    border-radius:50px;
}

.tryAgain{
    background-color:rgba(64,224,208,1)  /* turquoise */
}

.tryAgain:hover{
    background-color:rgba(64,224,208,0.3)  /* turquoise 透明度0.3*/
}

.return2{
    background-color:rgba(255,255,0,0.1);  /*yellow */
}

.return2{
    background-color:rgba(255,255,0,0.0.3);  /*yellow 透明度0.3*/
}
</style>

</body>
</html>