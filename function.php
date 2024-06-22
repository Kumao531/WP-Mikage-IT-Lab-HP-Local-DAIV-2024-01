function replace_default_jquery() {
    // デフォルトの jQuery を登録解除
    wp_deregister_script('jquery');

    // 独自のJQueryのバージョンの読み込み
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', array(), null, true);

    // カスタム jQuery をキューに追加
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'replace_default_jquery');

function custom_theme_scripts() {
    // スタイルの読み込み（この例ではstyle.css）
    wp_enqueue_style('main-styles', get_stylesheet_uri() . '/css/style.css', array(), null, true);

    // JavaScriptの読み込み
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/script.js', array(), null, true);

    // JavaScriptの読み込み
    wp_enqueue_script('custom-scripts-serv', get_template_directory_uri() . '/js/script-serv.js', array(), null, true);

    // JavaScriptの読み込み
    wp_enqueue_script('custom-scripts-inquiry', get_template_directory_uri() . '/js/script-inquiry.js', array(), null, true);

    // JavaScriptの読み込み
    wp_enqueue_script('custom-scripts-inq', get_template_directory_uri() . '/js/script-inq.js', array(), null, true);

    // JavaScriptの読み込み
    wp_enqueue_script('custom-scripts-show', get_template_directory_uri() . '/js/script-show.js', array(), null, true);

    // JavaScriptの読み込み
    wp_enqueue_script('custom-scripts-curousel', get_template_directory_uri() . '/js/script-curousel.js', array(), null, true);

    // JavaScriptの読み込み
    wp_enqueue_script('custom-scripts-mail', get_template_directory_uri() . '/js/script-mail.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
