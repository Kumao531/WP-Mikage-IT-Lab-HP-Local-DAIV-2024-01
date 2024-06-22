<!DOCTYPE html>
<html lang="jp">

  <head>
    <meta charset="UTF-8">
<!--    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ミカゲITラボは「トータルシステムコーディネイト」のブランドで、カスタマ・サービスを創造し、ビジネスの流れを作り、業務をデザインし、ITシステムの制作まで行うサービスを提供しています。">
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

    <!-- JQueryの読み込み -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>

    <!-- カルーセル用 -->
    <!-- slickの読み込み -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <?php wp_head(); ?>
  </head>

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


  <body>
    <!-- ヘッダー -->
    <header>

      <!-- ロゴマーク表示部 -->
      <div class="trade-mark ">
        <!-- ロゴマーク -->
        <figure class="LogoMark"><img src="<?php echo get_template_directory_uri(); ?>/image/TradeMark/TradeMark.png" alt="トレードマーク" /></figure>
        <p class="LogoText"><span class="LogoTextFig">ミカゲITラボ</span></p>
      </div>

      <!-- ヘッダーナビゲーション -->
      <div class="header-nav">
        <nav>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">トップ</a></li>
            <li><a href="<?php echo home_url(); ?>/company">会社紹介</a></li>
            <li><a href="<?php echo home_url(); ?>/service">サービス説明</a></li>
            <li><a href="<?php echo home_url(); ?>/aboutus">About US</a></li>
            <li><a href="<?php echo home_url(); ?>/inquiry">問い合わせ</a></li>
          </ul>
        </nav>
      </div>

      <!-- スマフォ専用メニュー画面 -->
      <div class="hamburger-menu">

        <!-- ハンバーガーメニュー -->
        <figure class="menu-toggle">
          <img src="<?php echo get_template_directory_uri(); ?>/image/parts/hamburger-menu.png" alt="ハンバーガーメニュー" class="hamburger-bottun" />
        </figure>

        <!-- スマフォ用ナビゲーション画面 -->
        <div class="menu">

          <!-- 閉じるボタン -->
          <figure class="close-button">
            <img src="<?php echo get_template_directory_uri(); ?>/image/parts/close-button.png" alt="閉じるボタン" />
          </figure>

          <!-- スマフォ専用ナビゲーション -->
          <div class="header-nav-sp">
            <h3>メニュー</h3>
            <nav>
              <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">トップ</a></li>
                <li><a href="<?php echo home_url(); ?>/company">会社紹介</a></li>
                <li><a href="<?php echo home_url(); ?>/service">サービス説明</a></li>
                <li><a href="<?php echo home_url(); ?>/aboutus">About US</a></li>
                <li><a href="<?php echo home_url(); ?>/inquiry">お問い合わせ</a></li>
              </ul>
            </nav>
          </div>

        </div>

      <!-- ここまで：スマフォ専用メニュー画面 -->
      </div>

    </header>
