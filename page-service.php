<?php get_header(); ?>

    <!-- メイン -->
    <main id="main">

      <!-- メインビジュアル -->
      <section class="main-visual">
        <figure class="main-visula-fig">
          <img src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgExplainServices.png" alt="メインビジュアルの背景図" />
        </figure>
        <div class="main-visual-title-panel">
          <div class="main-visual-title-area main-visual-title-area-service">
            <h3 class="main-visual-title main-visual-title-figure-service">
              <span>サービス説明<span>
            </h3>
            <p class="main-visula-narration main-visula-narration-service">
              会社のサービスを紹介します
            </p>
          </div>
        </div>

      </section>

      <!-- 主記述部 -->
      <section class="main-description" id="top">
        <div class="main-description-service">

          <!-- 要旨説明 -->
          <section class="abstract-service">
            <h2 class="title-service">提供サービスメニュー</h2>
            <p class="abstract-text-service regtext">
              次のメニュからご覧になりたいサービスをお選びください。
            </p>
          </section>

          <!-- サービスの説明図 -->
          <section class="display-bord-service">

            <!-- Web開発 -->
            <div class="web-service plate-service">
              <a href="<?php echo home_url(); ?>/serv-web">
                <img src="<?php echo get_template_directory_uri(); ?>/image/Service/darkblue-paint-plate.png" alt="プレート１" />
                <p>Web開発</p>
              </a>
            </div>

            <!-- システム開発 -->
            <div class="si-service plate-service">
              <a href="<?php echo home_url(); ?>/serv-si">
                <img src="<?php echo get_template_directory_uri(); ?>/image/Service/darkgreen-paint-plate.png" alt="プレート２" />
                <p>システム開発</p>
              </a>
            </div>

            <!-- プロジェクトマネージメント -->
            <div class="pm-service plate-service">
              <a href="<?php echo home_url(); ?>/serv-pm">
                <img src="<?php echo get_template_directory_uri(); ?>/image/Service/darkred-paint-plate.png" alt="プレート３" />
                <p>プロジェクト<br />マネージメント</p>
              </a>
            </div>

            <!-- コンサルテーション -->
            <div class="consul-service plate-service">
              <a href="<?php echo home_url(); ?>/serv-consul">
                <img src="<?php echo get_template_directory_uri(); ?>/image/Service/darkyellow-paint-plate.png" alt="プレート４" />
                <p>コンサル<br />テーション</p>
              </a>
            </div>

          </section>

        </div>
      </section>

    </main>

  <?php get_footer(); ?>