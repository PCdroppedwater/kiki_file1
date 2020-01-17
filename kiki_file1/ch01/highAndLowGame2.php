<?php
$number6 = 6;    //説明文の値、語句
$number7 = 7;
$number8 = 8;
$high = 'High';
$low = 'Low';

?>



<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type"content="text/html;charset="UTF-8">
<title>High&Lowゲーム</title>
</head>

<body>
<div align="center">
<font size="8">High&Low&nbsp;ゲーム</font>
<hr>
<h2><b>ルール説明</b></h2>
</div>
<p class="outline">High&Lowゲームは、2枚のトランプが表示され、数字が見えている左側のカードよりも伏せられている右側のカードの数字が大きい(<?= $high; ?>)か小さい(<?= $low; ?>)かを当てるシンプルなカードゲームです。<br>
カードの優劣や同点だった場合には以下の通りになります。</p>


<ul>
<li>JK(ジョーカー)が最も弱く、Kが最も強いものとします。</li>
<li>左側と右側の数字が同じだった場合は、HighとLowのどちらを選んでも勝ちとします。</li>
</ul>


<p class="outline">例えば左のカードの値が「<?= $number7; ?>」で「<?= $high; ?>」と予想した場合、右のカードの値が「<?= $number7; ?>」以上なら勝利となります。
反対に「<?= $number6; ?>」以下だった場合、負けとなります。<br>
<br>
左のカードの値が「<?= $number7; ?>」で「<?= $low; ?>」を選択した場合、右のカードの値が「<?= $number7; ?>」以下なら勝利となります。
反対に「<?= $number8; ?>」以上なら負けとなります。</p><br>

<br>
<div >
<a href="highAndLowGame3.php" class="start2">ゲーム開始</a>
</div>



<style>
p.outline{
    word-break:normal;
    width:1000px;
    font-size:20px;
    margin-left:auto;
    margin-right:auto;
    background-color:rgba(0,255,255,0.1);  /* aqua 透明度0.1 */
}

@media(max-width: 900px){
    p.outline{
    word-break:normal;
    width:600px;
    font-size:20px;
    margin-left:auto;
    margin-right:auto;
    background-color:rgba(0,255,255,0.1);  /* aqua 透明度0.1 */
  }
}

@media(max-width: 600px){
    p.outline{
    word-break:normal;
    width:400px;
    font-size:20px;
    margin-left:auto;
    margin-right:auto;
    background-color:rgba(0,255,255,0.1);  /* aqua 透明度0.1 */
  }
}

ul{
   word-break:normal;

}

li{
   word-break:normal;
   width:510px;
   font-size:20px;
   margin-top:20px;
   margin-left:auto;
   margin-right:auto;

}

.start2{
    color:black;
    padding:10px 15px 10px 15px;
    margin-left:45%;
    font-size:20px;
    text-decoration:none;
    border:1px solid black;
    background-color:rgba(255,255,0,1); /*yellow*/
    border-radius:50px;
}

.start2:hover{
    background-color:rgba(255,255,0,0.3); /*yellow  透明度0.3*/
}

</style>

</body>
</html>
