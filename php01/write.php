<?php
//inputからもってきたものを取得＆変数に代入
$ct = $_POST['ct'];
$date = $_POST['date'];
$duration = $_POST['duration'];

//日付取得
// $time = date("Y-m-d H:i:s");
//inputからもってきたものを取得＆変数に代入
$str =  $ct.','.$duration.','.$date; 

// ファイルに書き込み
// ファイルをひらく（場所,開き方）
$file = fopen('./data/data.txt','a');
// ファイルに書き込む（どこに,何を、改行）
fwrite($file, $str ."\n");
// ファイルを閉じる
fclose($file);


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <!-- <p><?= $str ?></p> -->
    <!-- <h2>./data/data.txt を確認しましょう！</h2> -->
    <table>
    <tr>
    <td><?= $ct ?></td>
    <td><?= $date ?></td>
    <td><?= $duration ?></td>
    </tr>
    </table>



    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
