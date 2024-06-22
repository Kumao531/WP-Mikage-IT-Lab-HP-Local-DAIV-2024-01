<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $gender = isset($_POST['sex']) ? $_POST['sex'] : '未選択';
    $telnumber = $_POST['tel-no'];
    $email = $_POST['email'];


    $message = $_POST['sex'];
    $subscribe = isset($_POST['subscribe']) ? 'はい' : 'いいえ';
    $country = $_POST['country'];

    $to = 'your-email@example.com';  // 送信先のメールアドレス
    $subject = '新しいフォームの送信';
    $body = "名前: $name\n";
    $body .= "メッセージ: $message\n";
    $body .= "性別: $gender\n";
    $body .= "購読する: $subscribe\n";
    $body .= "国: $country\n";

    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo 'メールが送信されました。';
    } else {
        echo 'メールの送信に失敗しました。';
    }
}
?>