<?php
/*
 * Template Name: Send Mail Example
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// メール送信処理
function send_custom_email() {

    $to = 'accueil@mikage-it-lab.com'; // 送信先のメールアドレス
    $subject = 'テストメールの件名:テスト６'; // メールの件名
    $message = 'これはテストメールです。'; // メール本文
    $headers = array('Content-Type: text/html; charset=UTF-8'); // ヘッダー情報（HTMLメールの場合）

    $sent = wp_mail( $to, $subject, $message, $headers );

    if ( $sent ) {
        echo 'メールが送信されました。';
    } else {
        echo 'メール送信に失敗しました。';
    }
}

// ページがロードされたときにメール送信
send_custom_email();
?>
