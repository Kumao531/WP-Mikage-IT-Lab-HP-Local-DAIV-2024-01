// WordPressにおいて独自のJQueryの版で置き換え
function replace_default_jquery() {
    // デフォルトの jQuery を登録解除
    wp_deregister_script('jquery');

    // 独自のJQueryのバージョンの読み込み
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', array(), null, true);

    // カスタム jQuery をキューに追加
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'replace_default_jquery');

/*
// スラッグが inquiry のときのみ script-inquiry.js を footer.php に組み込む
function enqueue_conditional_scripts() {
    if (is_page('inquiry')) { // specific page slug or ID can be used here
        wp_enqueue_script(
            'my-custom-script-inquiry', // handle
            get_template_directory_uri() . '/js/script-inquiry.js', // path to your JS file
            array('jquery'), // dependencies
            '1.0', // version
            true // load in footer
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_conditional_scripts');

// スラッグが inquiry のときのみ script-mail.js を footer.php に組み込む
function enqueue_conditional_scripts() {
    if (is_page('inquiry')) { // specific page slug or ID can be used here
        wp_enqueue_script(
            'my-custom-script-mail', // handle
            get_template_directory_uri() . '/js/script-mail.js', // path to your JS file
            array('jquery'), // dependencies
            '1.0', // version
            true // load in footer
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_conditional_scripts');
*/

// サーバーサイドでのメール送信のためのAjaxアクションの処理
add_action('wp_ajax_submit_form', 'submit_form_callback');
add_action('wp_ajax_nopriv_submit_form', 'submit_form_callback');
// メールのサーバー側の処置
function submit_form_callback() {
    $data = json_decode(file_get_contents('php://input'), true);

    $to = 'accueil@mikage-it-lab.com';
    $subject = '【要確認】mikage-it-labのホームページでの問合せ！';

    $message =  "氏名: " . $data['name'] . "\n";
    $message =  "性別: " . $data['sex'] . "\n";
    $message =  "電話番後: " . $data['telno'] . "\n";
    $message =  "メールアドレス: " . $data['email'] . "\n";
    $message =  "どこで会社を知ったのか: " . $data['where'] . "\n";
    $message =  "問合せの目的: " . $data['purpose'] . "\n";
    $message =  "その他の目的: " . $data['otherPurpose'] . "\n";
    $message =  "問合せの内容: " . $data['inquiryContent'] . "\n";
//    $message = "Name: " . $data['name'] . "\n";
//    $message .= "Email: " . $data['email'] . "\n";
//    $message .= "Message: " . $data['message'] . "\n";
//    $message .= "Options: " . implode(', ', $data['options']) . "\n";
//    $message .= "Checks: " . implode(', ', $data['checks']) . "\n";
//    $message .= "Select: " . $data['select'] . "\n";

    $headers = ['From: no-reply@mikage-it-lab.net', 'Content-Type: text/plain; charset=UTF-8'];

    wp_mail($to, $subject, $message, $headers);

    wp_die(); // WordPress AJAX の終わりを示す
}
// Ajaxのサーバーでのメール処理はここまで

// WordPressへのPHP化したカスタムCSSファイルの組み込み
function enqueue_custom_stylesheets() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css.php');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_stylesheets');

// WordPressへのCSSやJavaScripの読み込み
function custom_theme_scripts() {
    // スタイルの読み込み（この例ではstyle.css）
    wp_enqueue_style('main-styles', get_stylesheet_uri() . '/css/style.css', array(), null, true);

    // JavaScriptの読み込み（script.js）
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/script.js', array(), null, true);

    // JavaScriptの読み込み（script-serv.js）
    wp_enqueue_script('custom-scripts-serv', get_template_directory_uri() . '/js/script-serv.js', array(), null, true);

    // JavaScriptの読み込み（script-inquiry.js）
    wp_enqueue_script('custom-scripts-inquiry', get_template_directory_uri() . '/js/script-inquiry.js', array(), null, true);

    // JavaScriptの読み込み（script-inq.js）
    wp_enqueue_script('custom-scripts-inq', get_template_directory_uri() . '/js/script-inq.js', array(), null, true);

    // JavaScriptの読み込み（script-show.js）
    wp_enqueue_script('custom-scripts-show', get_template_directory_uri() . '/js/script-show.js', array(), null, true);

    // JavaScriptの読み込み（script-curousel.js）
    wp_enqueue_script('custom-scripts-curousel', get_template_directory_uri() . '/js/script-curousel.js', array(), null, true);

    // JavaScriptの読み込み（script-mail.js）
    wp_enqueue_script('custom-scripts-mail', get_template_directory_uri() . '/js/script-mail.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
