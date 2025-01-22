/*
document.getElementById('submit').addEventListener('submit', function (event) {
    event.preventDefault();
    inputCheck();
});
*/

/* 入力チェック */
function inputCheck() {

  // エラーチェック結果を示すフラグ
  // let result = false;
  let isValid = true;
  // エラーメッセージの格納変数の準備
  // let message = "";
  let errorMessages = [];

  // エラー状態(true)か否か(false)の状態を保持する変数の準備と初期化
  // let error = false;


  /* 「お名前」のチェック */
  /* 入力されていることのチェック */
  if ($('#username-obj').val() == '') {
    // 空なのでエラー
    $('#username-obj').css('background-color', '#f79999');
    isValid = false;
    // message += 'お名前を入力してください。\n';
    errorMessages.push("お名前を入力してください。");
    /* 全角チェック */
  } else if (!$('#username-obj').val().match(/^[ぁ-んァ-ヶー一-龠 　\r\n\t]+$/)) {
    // エラー処理
    $('#username-obj').css('background-color', '#f79999');
    isValid = false;
    // message += 'お名前は全角入力してください。\n';
    errorMessages.push("お名前は全角入力してください。");
  } else {
    // エラーなし
    $('#username-obj').css('background-color', 'rgba(108, 108, 108, 0.20)');
  }

  /* 「性別」のチェック */
  /* どこにもチェックが入っていなかったらエラー */
  if ($('input[name="sex"]:checked').parent().text() == '') {
    // 未チェックでエラー
    $('.sex-inquiery').css('background-color', '#f79999');
    isValid = false;
    // message += '性別にチェックを入れてください。\n';
    errorMessages.push("性別にチェックを入れてください。");
  } else {
    // エラーなし
    $('.sex-inquiery').css('background-color', 'rgba(108, 108, 108, 0.20)');
  }

  /* 「電話番号」のチェック */
  /* 未入力は「ok」。入力されたたらフォーマット形式を確認 */
  if ($('#telephone-no').val() != '' && !$('#telephone-no').val().match(/^(0[5-9]0[-(]?[0-9]{4}[-)]?[0-9]{4}|0120[-]?\d{1,3}[-]?\d{4}|050[-]?\d{4}[-]?\d{4}|0[1-9][-]?\d{1,4}[-]?\d{1,4}[-]?\d{4})*$/)) {
    // 電話番号の正規表現（固定電話、携帯、フリーダイヤル、IP電話を考慮）が正しくないとき、エラー
    $('#telephone-no').css('background-color', '#f79999');
    isValid = false;
    // message += '「電話番号」が正しくありません。\n';
    errorMessages.push("電話番号が正しくありません。");
  } else {
    // エラーなし
    $('#telephone-no').css('background-color', 'rgba(108, 108, 108, 0.20)');
  }

  /* 「電子メール」のチェック */
  /* 入力されていることのチェック */
  if ($('#mail-object').val() === '') {
    // 未入力でエラー
    $('#mail-object').css('background-color', '#f79999');
    isValid = false;
    // message += '「電子メール」が未入力です。\n';
    errorMessages.push("電子メールが未入力です。");
  } else if (!$('#mail-object').val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
    $('#mail-object').css('background-color', '#f79999');
    isValid = false;
    // message += '「電子メール」のアドレスが正しく入力されていません。\n';
    errorMessages.push("電子メールのアドレスが正しく入力されていません。");
  } else {
    // エラーなし
    $('#mail-object').css('background-color', 'rgba(108, 108, 108, 0.20)');
  }

  /* 「どこで知ったか」のチェックボックスのチェック */
  /* 1つ以上のチェックがされていることのチェック */
  const checkboxes = document.querySelectorAll('input[type="checkbox"][name="whereis"]');

  let isAnySelectChecked = false;

  for (const checkbox of checkboxes) {
    if (checkbox.checked) {
      isAnySelectChecked = true;
      break;
    }
  }

  if (isAnySelectChecked) {
    // エラーなし
    $('.checkbox-inquiry').css('background-color', 'rgba(108, 108, 108, 0.20)');
  } else {
    // エラー
    $('.checkbox-inquiry').css('background-color', '#f79999');
    isValid = false;
    // message += 'ミカゲITラボをどこで知ったのかのチェックボックスにチェックが入っていません。\n';
    errorMessages.push("ミカゲITラボをどこで知ったのかのチェックボックスにチェックが入っていません。");
  }

  /* 「お問い合わせの種類」が「その他」のときの「目的の記入欄」のチェック */
  /* 「お問い合わせの種類」が「その他」であるかのチェック */
  if ($('.selectbox-inquiry').val() == 'その他') {
    /* 入力されていることのチェック */
    if ($('.other-inquiry').val() === '') {
      // 空なのでエラー
      $('.other-inquiry').css('background-color', '#f79999');
      isValid = false;
      // message += '「お問い合わせの種類」が「その他」ですので「その他」の欄にお問い合わせの目的を入力してください。\n';
      errorMessages.push("お問い合わせの種類」が「その他」ですので「その他」の欄にお問い合わせの目的を入力してください。");
    } else if ($('.selectbox-inquiry').val().length > 20) {
      // 入力が20字を超えたらエラー
      $('.other-inquiry').css('background-color', '#f79999');
      isValid = false;
      // message += '「お問い合わせの種類」は20文字以内にしてください。\n';
      errorMessages.push("「お問い合わせの種類」は20文字以内にしてください。");
    } else {
      // エラーなし
      $('.other-inquiry').css('background-color', 'rgba(108, 108, 108, 0.20)');
    }
  }
  /* 「お問い合わせの種類」が「その他」でないとき */
  else {
    /* 入力されていないことのチェック */
    if ($('#other-inquiry-object').val() != '') {
      // 「その他」でないのに「目的の記入欄」も記入されているのでエラー
      $('#other-inquiry-object').css('background-color', '#f79999');
      isValid = false;
      // message += '「お問い合わせの種類」が「その他」でないのですが、「その他」のときの「問い合わせの目的」も入力されています。\n';
    } else {
      // エラーなし
      $('#other-inquiry-object').css('background-color', 'rgba(108, 108, 108, 0.20)');
    }
  }

  /* 「お問い合わせの内容」のチェック */
  /* 入力されていることのチェック */
  if ($('#contact-textarea').val().length === 0) {
    // 空ならばエラー
    $('#contact-textarea').css('background-color', '#f79999');
    isValid = false;
    // message += '「お問い合わせの内容」を入力してください。\n';
    errorMessages.push("「お問い合わせの内容」を入力してください。");
  } else if ($('#contact-textarea').val().length > 200) {
    // 入力が200字を超えたらエラー
    $('#contact-textarea').css('background-color', '#f79999');
    isValid = false;
    // message += '「お問い合わせの内容」は200文字以内にしてください。\n';
    errorMessages.push("「お問い合わせの内容」は200文字以内にしてください。");
  } else {
    // エラーなし
    $('#contact-textarea').css('background-color', 'rgba(108, 108, 108, 0.20)');
  }

  /* エラー状態の有無で送信ボタンを切り替え */
  // エラーがあれば送信ボタンを非表示
  const sendButton = document.getElementById('send-btn');
  const NoSendButton = document.getElementById('nosend-btn');

  // エラーメッセージを表示する
  displayErrors(errorMessages);

  if ( isValid ) {
    // エラーがなければ送信ボタンを表示する
    sendButton.style.display = 'block';
    NoSendButton.style.display = 'none';
  } else {
    // エラーがあれば送信不可ボタンを表示する
    sendButton.style.display = 'none';
    NoSendButton.style.display = 'block';
  }

}

function displayErrors(errorMessages) {
  // エラー表示をするメッセージエリアdivを同定する
  const errorMessagesDiv = document.getElementById('errorMessages');

  // 表示しているメッセージをクリア
  errorMessagesDiv.innerHTML = '';

  // errorMessages の各メッセージを処理する
  errorMessages.forEach(message => {
    // 前後の空白をトリムした文字列が空でないかチェック
    if (message.trim() !== '') {
      // 新しい<p>要素を作成してメッセージを設定
      const p = document.createElement('p');
      p.textContent = message;
      // targetDivに追加
      errorMessagesDiv.appendChild(p);
    }
  });
}

/* 必須入力項目からフォーカスが外れた時(blur)にフォームのチェックを行う */
$('#username-obj').blur(function () {
  inputCheck();
});
$('#telephone-no').blur(function () {
  inputCheck();
});
$('#mail-object').blur(function () {
  inputCheck();
});
$('#other-inquiry-object').blur(function () {
  inputCheck();
});

// 必須のラジオボタンが押されたときにフォームのチェックを行なう
$('input[name="sex"]:radio').change(function () {
  inputCheck();
});

// 必須のチェックボックスでチェックのイベントがあったときにチェックを行なう
$('input[name="whereis"]:checkbox').change(function () {
  inputCheck();
});

// セレクトボックスが選択の変更を行なうイベントがあったときにチェックを行なう
$('#inquiry-purpose').change(function () {
  inputCheck();
});

// 必須なテキストエリアで変更のイベントがあったときにチェックを行なう(PC用)
$("#contact-textarea").on("change",function() {
  inputCheck();
});

// メール送信のための送信データの整形処理と送信処理のキック
function handleSubmit(event) {
    event.preventDefault(); // submitのデフォルト動作を防ぐ

    // エラーメッセージのクリア（念押し）
    const errorContainer = document.getElementById('errorMessages');
    errorContainer.innerHTML = "";

    // フォームデータをオブジェクトに集める
    const formData = {
      name: document.getElementById('username-obj').value,
      sex: Array.from(document.querySelectorAll('input[name="sex"]:checked')).map(opt => opt.value),
      telno: document.getElementById('telephone-no').value,
      email: document.getElementById('mail-object').value,
      where: Array.from(document.querySelectorAll('input[name="whereis"]:checked')).map(check => check.value),
      purpose: document.getElementById('inquiry-purpose').value,
      otherPurpose: document.getElementById('other-inquiry-object').value,
      inquiryContent: document.getElementById('contact-textarea').value
    };

/*
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value,
        options: Array.from(document.querySelectorAll('input[name="option"]:checked')).map(opt => opt.value),
        checks: Array.from(document.querySelectorAll('input[name="checks"]:checked')).map(check => check.value),
        select: document.getElementById('select').value
*/

    // 送信データの確認
    console.log('編集をしたメールの送信データ:', formData);

    // AJAXリクエストの発行
    sendEmail(formData);
}

function sendEmail(formData) {
    // サーバー側のAjaxのホームの取得
    const ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    const xhr = new XMLHttpRequest();
    xhr.open('POST', ajaxurl, true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    // action パラメータを追加する
    formData.action = 'submit_form';

    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('Email sent successfully:', xhr.responseText);
        } else {
            console.error('Error in sending email:', xhr.statusText);
        }
    };

    xhr.onerror = function() {
        console.error('Network error.');
    };

    xhr.send(JSON.stringify(formData));
}
