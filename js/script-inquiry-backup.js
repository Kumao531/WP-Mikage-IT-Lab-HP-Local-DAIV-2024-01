/* 入力チェック */
function inputCheck() {
  console.log('inputCheck関数の呼び出し');

  // エラーチェック結果を受け取る変数の準備
  let result = false;
  // エラーメッセージの格納変数の準備
  let message = "";
  // エラー状態(true)か否か(false)の状態を保持する変数の準備と初期化
  let error = false;

  /* 「お名前」のチェック */
  /* 入力されていることのチェック */
  if ($('#username-obj').val() == '') {
    // 空なのでエラー
    $('#username-obj').css('background-color', '#f79999');
    error = true;
    message += 'お名前を入力してください。\n';
    /* 全角チェック */
  } else if (!$('#username-obj').val().match(/^[ぁ-んァ-ヶー一-龠 　\r\n\t]+$/)) {
    // エラー処理
    $('#username-obj').css('background-color', '#f79999');
    error = true;
    message += 'お名前は全角入力してください。\n';
  } else {
    // エラーなし
    $('#username-obj').css('background-color', '#fafafa');
  }

  /* 「性別」のチェック */
  /* どこにもチェックが入っていなかったらエラー */
  if ($('input[name="sex"]:checked').parent().text() == '') {
    // 未チェックでエラー
    $('.sex-inquiery').css('background-color', '#f79999');
    error = true;
    message += '性別にチェックを入れてください。\n';
  } else {
    // エラーなし
    $('.sex-inquiery').css('background-color', '#ffffff');
  }

  /* 「電話番号」のチェック */
  /* 未入力は「ok」。入力されたたらフォーマット形式を確認 */
  if ($('#telephone-no').val() != '' && !$('#telephone-no').val().match(/^(0[5-9]0[-(]?[0-9]{4}[-)]?[0-9]{4}|0120[-]?\d{1,3}[-]?\d{4}|050[-]?\d{4}[-]?\d{4}|0[1-9][-]?\d{1,4}[-]?\d{1,4}[-]?\d{4})*$/)) {
    // 電話番号の正規表現（固定電話、携帯、フリーダイヤル、IP電話を考慮）が正しくないとき、エラー
    $('#telephone-no').css('background-color', '#f79999');
    error = true;
    message += '「電話番号」が正しくありません。\n';
  } else {
    // エラーなし
    $('#telephone-no').css('background-color', '#fafafa');
  }

  /* 「電子メール」のチェック */
  /* 入力されていることのチェック */
  if ($('#mail-object').val() === '') {
    // 未入力でエラー
    $('#mail-object').css('background-color', '#f79999');
    error = true;
    message += '「電子メール」が未入力です。\n';
  } else if (!$('#mail-object').val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
    $('#mail-object').css('background-color', '#f79999');
    error = true;
    message += '「電子メール」のアドレスが正しく入力されていません。\n';
  } else {
    // エラーなし
    $('#mail-object').css('background-color', '#fafafa');
  }

  /* 「どこで知ったか」のチェックボックスのチェック */
  /* 1つ以上のチェックがされていることのチェック */
  const checkboxes = document.querySelectorAll('input[type="checkbox"][name="whereis[]"]');

  let isAnySelectChecked = false;

  for (const checkbox of checkboxes) {
    if (checkbox.checked) {
      isAnySelectChecked = true;
      break;
    }
  }

  if (isAnySelectChecked) {
    // エラーなし
    $('.checkbox-inquiry').css('background-color', '#fafafa');
  } else {
    // エラー
    $('.checkbox-inquiry').css('background-color', '#f79999');
    error = true;
    message += 'ミカゲITラボをどこで知ったのかのチェックボックスにチェックが入っていません。\n';
  }

  /* 「お問い合わせの種類」が「その他」のときの「目的の記入欄」のチェック */
  /* 「お問い合わせの種類」が「その他」であるかのチェック */
  if ($('.selectbox-inquiry').val() == 'その他') {
    /* 入力されていることのチェック */
    if ($('.other-inquiry').val() === '') {
      // 空なのでエラー
      $('.other-inquiry').css('background-color', '#f79999');
      error = true;
      message += '「お問い合わせの種類」が「その他」ですので「その他」の欄にお問い合わせの目的を入力してください。\n';
    } else if ($('.selectbox-inquiry').val().length > 40) {
      // 入力が40字を超えたらエラー
      $('.other-inquiry').css('background-color', '#f79999');
      error = true;
      message += '「お問い合わせの種類」は40文字以内にしてください。\n';
    } else {
      // エラーなし
      $('.other-inquiry').css('background-color', '#fafafa');
    }
  }
  /* 「お問い合わせの種類」が「その他」でないとき */
  else {
    /* 入力されていないことのチェック */
    if ($('#other-inquiry-object').val() != '') {
      // 「その他」でないのに「目的の記入欄」も記入されているのでエラー
      $('#other-inquiry-object').css('background-color', '#f79999');
      error = true;
      message += '「お問い合わせの種類」が「その他」でないのですが、「その他」のときの「問い合わせの目的」も入力されています。\n';
    } else {
      // エラーなし
      $('#other-inquiry-object').css('background-color', '#fafafa');
    }
  }

  /* 「お問い合わせの内容」のチェック */
  /* 入力されていることのチェック */
  if ($('#contact-textarea').val().length === 0) {
    // 空ならばエラー
    $('#contact-textarea').css('background-color', '#f79999');
    error = true;
    message += '「お問い合わせの内容」を入力してください。\n';
  } else if ($('#contact-textarea').val().length > 800) {
    // 入力が40字を超えたらエラー
    $('#contact-textarea').css('background-color', '#f79999');
    error = true;
    message += '「お問い合わせの内容」は800文字以内にしてください。\n';
  } else {
    // エラーなし
    $('#contact-textarea').css('background-color', '#fafafa');
  }

  /* エラー状態の有無で送信ボタンを切り替え */
  // エラーがあれば送信ボタンを非表示
  const sendButton = document.getElementById('send-btn');
  const NoSendButton = document.getElementById('nosend-btn');
  if ( error ) {
    // エラーがあれば送信不可ボタンを表示する
    sendButton.style.display = 'none';
    NoSendButton.style.display = 'block';
  } else {
    // エラーがなければ送信ボタンを表示する
    sendButton.style.display = 'block';
    NoSendButton.style.display = 'none';
  }


  /* チェック判定結果の作成 */
  let returnValue = {
    error: error,
    message: message
  }

  /* 戻り値としてエラー結果を返す */
  return returnValue;
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
