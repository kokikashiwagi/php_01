<html>

<head>
    <meta charset="utf-8">
    <title>行った国リスト（メジャーな国）</title>
</head>

<body>
<h1>行った国を登録</h1>
    <form action="write.php" method="post">
        行った国:
        <select name=ct>
            <option value=イギリス>イギリス</option>
            <option value=フランス>フランス</option>
            <option value=ドイツ>ドイツ</option>
            <option value=ロシア>ロシア</option>
            <option value=アメリカ>アメリカ</option>
            <option value=中国>中国</option>
            <option value=オーストラリア>オーストラリア</option>
        </select>
        行った日: <input type="date" name="date" >
        滞在日数: <input type="number" name="duration" value=3>
        <input type="submit" value="送信">
    </form>
</body>
</html>
