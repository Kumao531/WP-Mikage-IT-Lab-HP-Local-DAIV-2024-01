document.getElementById("form-inauiry").addEventListener("submit", function(event) {
    event.preventDefault(); // フォームのデフォルト送信を防ぐ

    // フォームデータを取得
    const formData = new FormData(event.target);

    // データを整形
    let message = "フォームの送信内容:\n\n";
    formData.forEach((value, key) => {
        message += `${key}: ${value}\n`;
    });

    console.log(message); // デバッグ用にコンソールに出力

    // メール送信のためにバックエンドにデータを送信
    fetch('send_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        alert(result);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
