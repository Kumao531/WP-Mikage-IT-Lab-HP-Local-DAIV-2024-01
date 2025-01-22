    <!-- フッター -->
    <footer class="footer">
      <!-- flexbox -->
      <div class="footer-grid">
        <!-- navigation on footer -->
        <div class="footer-nav">
          <h3 class="footer-title">メニュー</h3>
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
        <!-- 住所 -->
        <div class="footer-address">
          <h3 class="footer-title">住所</h3>
          <p class="footer-text">
            〒224-0033<br>
            神奈川県横浜市都筑区茅ケ崎東<br>1-1-5-503
          </p>
        </div>
        <!-- 電話・Eメール -->
        <div class="footer-telmail">
          <h3 class="footer-title">電話・Eメール</h3>
          <p class="footer-text">
            Tel: 090-2454-2518<br/>
            Email:<br/>
            accueil@mikage-it-lab.com
          </p>
        </div>
        <!-- 営業時間 -->
        <div class="footer-business-hours">
          <h3 class="footer-title">営業時間</h3>
          <p class="footer-text">
            土日、祝日、ゴールデンウィークと<br/>
            その中日、年末年始。を除く平日。<br>
            10:00 ～ 12:00<br/>
            13:00 ～ 17:00<br/>
          </p>
        </div>
      </div>
      <!-- コピーライト -->
      <div class="footer-copyright">
        <p class="copyright-text"><span>&copy;2024 Mikage IT Lab.</span></p>
      </div>
    </footer>

    <!-- カルーセルモジュール slick 読み込み -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script-inquiry.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script-mail.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script-curousel.js"></script>
    <?php wp_footer(); ?>
  </body>

</html>