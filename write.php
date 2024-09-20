<?php
// データがPOSTされているか確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTデータの取得とサニタイズ
    $event_date = htmlspecialchars($_POST['event_date']);
    $how_did_you_know = htmlspecialchars($_POST['how_did_you_know']);
    $satisfaction = htmlspecialchars($_POST['satisfaction']);
    $participation = htmlspecialchars($_POST['participation']);
    $comments = htmlspecialchars($_POST['comments']);

    // CSV形式で保存
    $data = [$event_date, $how_did_you_know, $satisfaction, $participation, $comments];
    $file = fopen('data.csv', 'a'); // ファイルを追記モードで開く
    fputcsv($file, $data); // データを書き込む
    fclose($file); // ファイルを閉じる

    // 完了メッセージとリンク
    echo "アンケートが送信されました！<br>";
    echo "<a href='index.php'>アンケートに戻る</a><br>";
    echo "<a href='read.php'>アンケート結果を見る</a>";
}
?>
