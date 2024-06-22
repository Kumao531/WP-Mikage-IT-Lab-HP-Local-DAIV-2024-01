<?php get_header(); ?>

    <!-- メイン -->
    <main id="main">

      <!-- メインビジュアル -->
      <section class="main-visual">
        <figure class="main-visula-fig">
          <img src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgAboutUS.png" alt="メインビジュアルの背景図" />
        </figure>
        <div class="main-visual-title-panel">
          <div class="main-visual-title-area main-visual-title-area-aboutus">
            <h3 class="main-visual-title main-visual-title-figure-aboutus">
              <span>About US<span>
            </h3>
            <p class="main-visula-narration main-visula-narration-aboutus">
              私たちのことについて紹介します
            </p>
          </div>
        </div>

      </section>

      <!-- 主記述部 -->
      <section class="main-description">
        <div class="main-description-about">

          <!-- 全体構成 -->
          <div class="description-abotus">

            <!-- 説明部 -->
            <article class="leading-aboutus">
              <h3>私たちの詳細</h3>
              <p class="regtext" id="top">
                　私たちのことについてをさらに説明します。<br/>
                　次の項目を参照ください(リンクのボタンになっています)。
              </p>
            </article>

            <!-- 詳細への参照 -->
            <article class="refarence-aboutus">

              <!-- 会社情報 -->
              <div class="company-aboutus reference-abotus">
                <a href="<?php echo home_url(); ?>/inq-company-info" class="nodecoration-about">
                  <figure class="ref-fig-aboutus">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/AboutUS/ApricotOne.png" alt="参照図１" />
                    <p>会社情報</p>
                  </figure>
                </a>
              </div>

              <!-- オフィス -->
              <div class="office-aboutus reference-abotus">
                <a href="<?php echo home_url(); ?>/inq-office-info" class="nodecoration-about">
                  <figure class="ref-fig-aboutus">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/AboutUS/BlueOne.png" alt="参照図２" />
                    <p>オフィス</p>
                  </figure>
                </a>
              </div>

              <!-- 開発・テスト環境 -->
              <div class="devenv-aboutus reference-abotus">
                <a href="<?php echo home_url(); ?>/inq-environ-info" class="nodecoration-about">
                  <figure class="ref-fig-aboutus">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/AboutUS/DarkGrayOne.png" alt="参照図３" />
                    <p>開発・テスト環境</p>
                  </figure>
                </a>
              </div>

              <!-- 個人プロフィール -->
              <div class="profile-aboutus reference-abotus">
                <a href="<?php echo home_url(); ?>/inq-personal-info" class="nodecoration-about">
                  <figure class="ref-fig-aboutus">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/AboutUS/GreenOne.png" alt="参照図４" />
                    <p>個人プロフィール</p>
                  </figure>
                </a>
              </div>

              <!-- モットー -->
              <div class="motto-aboutus reference-abotus">
                <a href="<?php echo home_url(); ?>/inq-motto"  class="nodecoration-about">
                  <figure class="ref-fig-aboutus">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/AboutUS/OrangeOne.png" alt="参照図５" />
                    <p>モットー</p>
                  </figure>
                </a>
              </div>

            <!-- ここまで：詳細への参照 -->
            </article>

            <!-- トレードマークの説明 -->
            <article class="trademake-part-abotus">
              <h3>トレードマークの紹介</h3>
              <div class="trademark-exp-aboutus">
                <figure class="trademark-aboutus">
                  <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/TradeMark/TradeMark01.png" alt="トレードマーク" />
                  </div>
                </figure>
                <div class="caption-aboutus">
                  <p class="regtext">
                    全体の「Ｍ」の文字形は、「ミカゲITラボ」の頭文字から採りました。
                    矢印は、自他共に栄え、また知識や技能の「向上」を表現してます。「緑」は創業者が学びに励んだ神戸のシンボルカラーであり、「青」は社会に立った横浜のシンボルカラーです。また、事業所を横浜に構え、サテライトを神戸に構えたことにもちなんでます。
                    そして、ロゴの容貌は、神戸の街から「六甲」の全景を眺めたものであり、企業理念をイワヲとして守り抜くことを誓ったものです。
                  </p>
                </div>
              </div>

              <!-- ここまで：トレードマークの説明 -->
            </article>

            <!-- ここまで：全体構成 -->
          </div>

        </div>
      </section>

    </main>

  <?php get_footer(); ?>