<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $sex = isset($_POST['sex']) ? $_POST['sex'] : '未選択';
    $tel-no = isset($_POST['tel-no']) ? $_POST['tel-no'] : '未入力';
    $email = $_POST['email'];
    $whereis = isset($_POST['whereis']) ? array_map('sanitize_text_field', $_POST['whereis']) : array();
    $inquiry-purpose = sanitize_text_field($_POST['inquiry-purpose']);
    $other-inquiry = isset($_POST['other-inquiry']) ? $_POST['other-inquiry'] : '未入力';
    $inquiry-message = sanitize_textarea_field($_POST['inquiry-message']);

    // メール本文の構成
    $to = 'accueil@mikage-it-lab.com';  // 送信先のメールアドレス

    $subject = '【確認要】mikage-it-labのホームページへの問合せ';
    $body = "名前: $username\n";
    $body .= "性別: $sex\n";
    $body .= "電話番号: $tel-no\n";
    $body .= "メールアドレス: $email\n";
    $body .= "どこでmikage-it-labを知りましたか: $whereis\n";
    $body .= "問合せの種別: $inquiry-purpose\n";
    $body .= "その他の問合せについて: $other-inquiry\n";
    $body .= "問合せの内容: $inquiry-message\n";

    $headers = "From: accueil@mikage-it-lab.com";

    if (mail($to, $subject, $body, $headers)) {
        echo 'メールが送信されました。';
    } else {
        echo 'メールの送信に失敗しました。';
    }
}
?>