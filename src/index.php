<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>私の自己紹介</title>
    <style>
        body {
            font-family: "Helvetica Neue", sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 2rem;
            max-width: 800px;
            margin: auto;
        }
        h1 {
            color: #007acc;
        }
        .profile {
            border: 1px solid #ccc;
            padding: 1rem;
            background: white;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        .section {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="profile">
        <h1>こんにちは、<?php echo "ゆうた"; ?> です！</h1>
        <p>PHPを使って自己紹介ページを作成しています。</p>

        <div class="section">
            <h2>👤 プロフィール</h2>
            <ul>
                <li><strong>名前：</strong> ゆうた</li>
                <li><strong>出身：</strong> 大阪府</li>
                <li><strong>趣味：</strong> 音楽鑑賞、ゲーム制作、カフェ巡り</li>
                <li><strong>好きな言語：</strong> PHP / JavaScript</li>
            </ul>
        </div>

        <div class="section">
            <h2>📫 お問い合わせ</h2>
            <p>メールでのお問い合わせはこちら: <a href="mailto:yuta@example.com">yuta@example.com</a></p>
        </div>

        <div class="section">
            <h2>🗓️ 今日の日付</h2>
            <p><?php echo date("Y年m月d日 (D) H:i"); ?></p>
        </div>
    </div>
</body>
</html>
