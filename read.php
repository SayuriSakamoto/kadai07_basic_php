<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
</head>
<body>
    <h2>アンケート結果</h2>

    <?php
    // CSVファイルを開く
    $file = fopen('data.csv', 'r');
    
    if ($file) {
        // テーブルの開始
        echo "<table border='1'>";
        echo "<tr><th>体験会日時</th><th>どこで知ったか</th><th>満足度</th><th>次回参加意欲</th><th>ご意見・ご要望</th></tr>";

        // データを1行ずつ読み込んで表示
        while (($data = fgetcsv($file)) !== FALSE) {
            echo "<tr>";
            foreach ($data as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }

        // テーブルの終了
        echo "</table>";

        fclose($file); // ファイルを閉じる
    } else {
        echo "データがありません。";
    }
    ?>

    <br>
    <a href="index.php">アンケートに戻る</a>
</body>
</html>
