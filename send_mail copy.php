<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "accueil@mikage-it-lab.com"; // 受信するメールアドレス
    $subject = "【要確認:WPサーバーメール】mikage-it-lab.comより";

    // フォームデータをまとめる
    $message = "フォームの送信内容:\n\n";
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            $value = implode(", ", $value); // 配列の場合はカンマで連結
        }
        $message .= "$key: $value\n";
    }

    // メールのヘッダー
    $headers = "From:accueil@mikage-it-lab.com";

    // メール送信
    if (mail($to, $subject, $message, $headers)) {
        echo "メールが送信されました。";
    } else {
        echo "メール送信に失敗しました。";
    }
    } else {
        echo "Invalid request";
    }
}
?>