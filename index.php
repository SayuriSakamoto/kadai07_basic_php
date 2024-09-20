<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体験会アンケートフォーム</title>
</head>
<body>
    <h2>体験会アンケートフォーム</h2>
    <form action="write.php" method="post">
        <!-- 1. 体験会日時 -->
        <label for="event_date">体験会日時:</label>
        <input type="date" id="event_date" name="event_date" required><br><br>

        <!-- 2. どこで体験会を知ったか -->
        <label for="how_did_you_know">どこで体験会を知りましたか?</label><br>
        <input type="radio" id="flyer" name="how_did_you_know" value="チラシ" required>
        <label for="flyer">チラシ</label><br>
        <input type="radio" id="referral" name="how_did_you_know" value="紹介" required>
        <label for="referral">紹介</label><br>
        <input type="radio" id="website" name="how_did_you_know" value="HP" required>
        <label for="website">HP</label><br>
        <input type="radio" id="other" name="how_did_you_know" value="その他" required>
        <label for="other">その他</label><br><br>

        <!-- 3. 体験会の満足度（5段階） -->
        <label for="satisfaction">体験会の満足度 (5段階):</label>
        <select id="satisfaction" name="satisfaction" required>
            <option value="5">5 - 非常に満足</option>
            <option value="4">4 - 満足</option>
            <option value="3">3 - 普通</option>
            <option value="2">2 - 不満</option>
            <option value="1">1 - 非常に不満</option>
        </select><br><br>

        <!-- 4. 次回も参加したいか（5段階） -->
        <label for="participation">次回も参加したいですか？(5段階):</label>
        <select id="participation" name="participation" required>
            <option value="5">5 - ぜひ参加したい</option>
            <option value="4">4 - 参加したい</option>
            <option value="3">3 - どちらでもない</option>
            <option value="2">2 - あまり参加したくない</option>
            <option value="1">1 - 参加したくない</option>
        </select><br><br>

        <!-- 5. 体験会に対するご意見・ご要望 -->
        <label for="comments">体験会に対するご意見・ご要望:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50" placeholder="ご自由にお書きください"></textarea><br><br>

        <!-- 送信ボタン -->
        <input type="submit" value="送信">
    </form>
    <br>
    <a href="read.php">アンケート結果を見る</a>
</body>
</html>
