<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>行った国リスト</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div class="wrapper">
    <div class="header"><h3>行った国リスト</h3></div>
    <!-- <div class="container"> -->
        <!-- <div class="left">
           <img src="img/gazo.jpg" alt="KEN様の画像" width="80px">
        </div> -->
        <!-- <div class="right">
           <p>Hi, My name is Ken.</p>
           <P>Welcome to</P>
           <P>Tokyo Olympics!!</P>
        </div> -->
    <!-- </div> -->
    
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="./datamaps.world.min.js"></script>
<div id="container" style="position: relative; width: 500px; height: 300px;"></div>



    <div class="rec">
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th width="50%">行った国</th>
            <th width="25%">滞在日数</th>
            <th width="25%">行った日</th>
        </tr>


 <!--PHPはじまり  -->
 <!--PHPはじまり  -->
 <!--PHPはじまり  -->
<?php
$uk = 0;
$fr = 0;
$de = 0;
$rus = 0;
$usa = 0;
$can = 0;
$chi = 0;
$aus = 0;
$bra = 0;
$ind = 0;

// ファイルを開く
// 2nd引数をrにすると読み込み
$openfile = fopen('./data/data.txt','r');

// ファイル内容を1行ずつ読み込んで出力
// fgets=1行ずつ読み込む
// while文にすると行が終わるまでやる
while ($str_base = fgets($openfile)){
$str = explode(",", $str_base);
echo '<tr>';
echo '<td>'.$str[0].'</td>';
echo '<td>'.$str[1].'</td>';
echo '<td>'.$str[2].'</td>';
echo '</tr>';
echo '<br>';

if($str[0] =="イギリス"){
    $uk =$uk +1;
}
else if($str[0] =="フランス"){
    $fr =$fr +1;
}
else if($str[0] =="ドイツ"){
    $de =$de +1;
}
else if($str[0] =="ロシア"){
    $rus =$rus +1;
}
else if($str[0] =="アメリカ"){
    $usa =$usa +1;
}
else if($str[0] =="中国"){
    $chi =$chi +1;
}
else if($str[0] =="オーストラリア"){
    $aus =$aus +1;
}
else if($str[0] =="ブラジル"){
    $bra =$bra +1;
}
else if($str[0] =="インド"){
    $ind =$ind +1;
}


}

// echo "◆合計";
// echo "<br>";


// echo "イギリス ";
// echo $uk;
// echo "回";
// echo "<br>";

// echo "フランス";
// echo $fr;
// echo "回";
// echo "<br>";

// echo "ドイツ ";
// echo $de;
// echo "回";
// echo "<br>";

// echo "ロシア ";
// echo $rus;
// echo "回";
// echo "<br>";

// echo "アメリカ ";
// echo $usa;
// echo "回";
// echo "<br>";

// echo "中国 ";
// echo $chi;
// echo "回";
// echo "<br>";

// echo "オーストラリア ";
// echo $aus;
// echo "回";
// echo "<br>";

// echo "ブラジル ";
// echo $bra;
// echo "回";
// echo "<br>";

// echo "インド ";
// echo $ind;
// echo "回";
// echo "<br>";

// ファイルを閉じる
fclose($file);
?>

</div>

<script>
// 変数を定義してPHPから変数を持ってくる
var de = <?php echo $de ?>;
var fr = <?php echo $fr ?>;
var uk = <?php echo $uk ?>;
var rus = <?php echo $rus?>;
var usa = <?php echo $usa ?>;
var chi = <?php echo $chi ?>;
var aus = <?php echo $aus ?>;


// var map = new Datamap({element: document.getElementById('container')});
var basic_choropleth = new Datamap({
    element: document.getElementById("container"),
    projection: 'mercator',
    fills: {
        defaultFill: "#ABDDA4",
        authorHasTraveledTo: "#fa0fa0"
    },

  data: {
    // JPN: { fillKey: "authorHasTraveledTo" },
  }
});

if(de>0){
var colors = d3.scale.category10();
window.setInterval(function() {
  basic_choropleth.updateChoropleth({
    DEU: colors(Math.random() * 10),
    // USA: colors(Math.random() * 10),
    // RUS: colors(Math.random() * 100),
    // AUS: { fillKey: 'authorHasTraveledTo' },
    // BRA: colors(Math.random() * 50),
    // CAN: colors(Math.random() * 50),
    // ZAF: colors(Math.random() * 50),
    // IND: colors(Math.random() * 50),
  });
}, 2000);
}

if(fr>0){
    var colors = d3.scale.category10();
    window.setInterval(function() {
    basic_choropleth.updateChoropleth({
        FRA: colors(Math.random() * 10),
        });
    }, 2000);
}

if(uk>0){
    var colors = d3.scale.category10();
    window.setInterval(function() {
    basic_choropleth.updateChoropleth({
        GBR: colors(Math.random() * 10),
        });
    }, 2000);
}

if(rus>0){
    var colors = d3.scale.category10();
    window.setInterval(function() {
    basic_choropleth.updateChoropleth({
        RUS: colors(Math.random() * 10),
        });
    }, 2000);
}

if(usa>0){
    var colors = d3.scale.category10();
    window.setInterval(function() {
    basic_choropleth.updateChoropleth({
        USA: colors(Math.random() * 10),
        });
    }, 2000);
}

if(chi>0){
    var colors = d3.scale.category10();
    window.setInterval(function() {
    basic_choropleth.updateChoropleth({
        CHN: colors(Math.random() * 10),
        });
    }, 2000);
}

if(aus>0){
    var colors = d3.scale.category10();
    window.setInterval(function() {
    basic_choropleth.updateChoropleth({
        AUS: colors(Math.random() * 10),
        });
    }, 2000);
}

</script>
</body>
</html>