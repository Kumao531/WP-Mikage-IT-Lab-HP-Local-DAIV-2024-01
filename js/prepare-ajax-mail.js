function prepareDataAndSend() {
    const formData = {
        name: document.getElementById('name').value.trim(),
        email: document.getElementById('email').value.trim(),
        message: document.getElementById('message').value.trim(),
        gender: document.querySelector('input[name="gender"]:checked').value,
        interests: Array.from(document.querySelectorAll('input[name="interest"]:checked'))
                         .map(checkbox => checkbox.value),
        country: document.getElementById('country').value.trim()
    };

    console.log('送信データ:', formData);  // 送信データをコンソールに出力

    // AJAXリクエスト
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'send-email.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log('メール送信成功:', xhr.responseText);
                alert('メールが送信されました。');
            } else {
                console.log('メール送信エラー:', xhr.status, xhr.statusText);
                alert('メール送信に失敗しました。');
            }
        }
    };
    xhr.send(JSON.stringify(formData));
}
