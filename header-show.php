<!DOCTYPE html>
<html lang="jp">

  <head>
    <meta charset="UTF-8">
    <!--    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ミカゲITラボ</title>

    <!-- フォント取り込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
      rel="stylesheet">


    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <?php wp_head(); ?>

  </head>

  <body>

    <!-- ビューポート表示 -->
    <div class="viewport-test">
      <figure class="WP-Logo">
        <span class="powered-by">Powered by </span>
        <span class="WPTrademark"><img src="<?php echo get_template_directory_uri(); ?>/image/TradeMark/WordPress-logotype-standard-white.png" alt="WordPressマーク" /></span>
      </figure>
      <div class="Responsive-Message">
        <div class="ResponsiveSP">
          <span>For ( <strong style="color:#d8de88;">Phone</strong> , Tablet , PC )</span>
        </div>
        <div class="ResponsiveTB">
          <span>For ( Phone , <strong style="color:#d8de88;">Tablet</strong> , PC )</span>
        </div>
        <div class="ResponsivePC">
          <span>For ( Phone , Tablet , <strong style="color:#d8de88;">PC</strong> )</span>
        </div>
      </div>
    </div>

    <!-- ヘッダー -->
    <header class="header-inq">

      <!-- ロゴマーク表示部 -->
      <div class="trade-mark trade-mark-serv-sub">
        <!-- ロゴマーク -->
        <figure class="LogoMark"><img src="<?php echo get_template_directory_uri(); ?>/image/TradeMark/TradeMark.png" alt="トレードマーク" /></figure>
        <p class="LogoText"><span class="LogoTextFig">ミカゲITラボ</span></p>
      </div>

      <!-- スマフォ以外のヘッダーナビゲーション -->
      <div class="header-nav-show">
        <span><a href="<?php echo home_url(); ?>/inq-personal-info#call">戻る</a></span>
      </div>

      <!-- スマフォ専用メニュー画面 -->
      <div class="hamburger-menu-show">

        <!-- ハンバーガーメニュー -->
        <figure class="menu-toggle-show">
          <img src="<?php echo get_template_directory_uri(); ?>/image/parts/hamburger-menu.png" alt="ハンバーガーメニュー" class="hamburger-bottun" />
        </figure>

        <!-- スマフォ用ナビゲーション画面 -->
        <div class="menu-show">

          <!-- 閉じるボタン -->
          <figure class="close-button-show">
            <img src="<?php echo get_template_directory_uri(); ?>/image/parts/close-button.png" alt="閉じるボタン" />
          </figure>

          <!-- スマフォ専用ナビゲーション -->
          <div class="header-nav-sp">
            <h3>メニュー</h3>
            <nav>
              <ul>
                <li><a href="<?php echo home_url(); ?>/inq-personal-info#call">戻る</a></li>
              </ul>
            </nav>
          </div>

        </div>

        <!-- ここまで：スマフォ専用メニュー画面 -->
      </div>

    </header>
