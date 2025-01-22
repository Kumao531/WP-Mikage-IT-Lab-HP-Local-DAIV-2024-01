<?php
/*
Template Name: Custom Template Top Page
*/

get_header();

?>

  <!-- 固定ページのコンテンツエリア -->
  <!-- メイン -->
  <main id="main">
    <!-- 主記述部 -->
    <section class="main-description">
      <div class="main-description-custom-top">

          <?php
          // ループ開始
          while ( have_posts() ) :
              the_post();
              // コンテンツを表示
              the_content();
          endwhile; // ループ終了
          ?>
      </div>
    </section>
  </main>

<?php get_footer(); // デフォルトのフッターを呼び出します。 ?>
