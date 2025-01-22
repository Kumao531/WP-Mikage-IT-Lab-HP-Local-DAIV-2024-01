<?php
/*
Template Name: Custom Template Top
*/

get_header();

?>

<!-- 固定ページのコンテンツエリア -->
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // ループ開始
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' ); // デフォルトの内容を表示するテンプレートパーツを呼び出します。

        endwhile; // ループ終了
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); // デフォルトのフッターを呼び出します。 ?>