
<?php get_header() ?>

    <!-- メイン -->
    <main id="main">

      <!-- メインビジュアル（カルーセル） -->
      <section id="carousel-section">
        <div class="curousel-box">
          <div class="carousel">
            <!-- 1枚目（companyのメインビジュアル） -->
            <div class="main-visual">
              <figure class="main-visula-fig">
                <img src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgExplainCompany.png" alt="メインビジュアルの背景図" />
              </figure>
              <div class="main-visual-title-panel">
                <div class="main-visual-title-area .main-visual-title-area-company">
                  <h3 class="main-visual-title main-visual-title-figure-company">
                    <span>会社紹介<span>
                  </h3>
                  <p class="main-visula-narration main-visula-narration-company">
                    私たちはどういう会社なのか<br />
                    そして<br />
                    何を想い、どこに向かうのかについて<br />
                    お話しします
                  </p>
                </div>
              </div>
            </div>

            <!-- 2枚目 -->
            <div class="curousel-visual">
              <a href="<?php echo home_url(); ?>/company#profile">
                <!-- 構図全体のコンテナ -->
                <div class="curousel-plate curousel-profile">
                  <figure class="curousel-main-fig">
                    <img class="curousel-back-fig" src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgExplainCompany.png" alt="カルーセル背景" />
                  </figure>
                  <figure class="curousel-sub-fig">
                    <img class="curousel-snap-fig" src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic01-Company.png" alt="カルーセル図１" />
                  </figure>
                  <div class="surousel-descript">
                    <span>会社のプロフィール</span>
                  </div>
                </div>
              </a>
            </div>

            <!-- 3枚目 -->
            <div class="curousel-visual">
              <a href="<?php echo home_url(); ?>/company#next-it">
                <!-- 構図全体のコンテナ -->
                <div class="curousel-plate curousel-profile">
                  <figure class="curousel-main-fig">
                    <img class="curousel-back-fig" src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgExplainCompany.png" alt="カルーセル背景" />
                  </figure>
                  <figure class="curousel-sub-fig">
                    <img class="curousel-snap-fig" src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic02-Company.png" alt="カルーセル図２" />
                  </figure>
                  <div class="surousel-descript">
                    <span>新たなITのありかた</span>
                  </div>
                </div>
              </a>
            </div>

            <!-- 4枚目 -->
            <div class="curousel-visual">
              <a href="<?php echo home_url(); ?>/company#our-dream">
                <!-- 構図全体のコンテナ -->
                <div class="curousel-plate curousel-profile">
                  <figure class="curousel-main-fig">
                    <img class="curousel-back-fig" src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgExplainCompany.png" alt="カルーセル背景" />
                  </figure>
                  <figure class="curousel-sub-fig">
                    <img class="curousel-snap-fig" src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic03-Company.png" alt="カルーセル図３" />
                  </figure>
                  <div class="surousel-descript">
                    <span>私たちの夢の実現</span>
                  </div>
                </div>
              </a>
            </div>

            <!-- 5枚目 -->
            <div class="curousel-visual">
              <a href="<?php echo home_url(); ?>/company#cimpacy">
                <!-- 構図全体のコンテナ -->
                <div class="curousel-plate curousel-profile">
                  <figure class="curousel-main-fig">
                    <img class="curousel-back-fig" src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgExplainCompany.png" alt="カルーセル背景" />
                  </figure>
                  <figure class="curousel-sub-fig">
                    <img class="curousel-snap-fig" src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic04-Company.png" alt="カルーセル図４" />
                  </figure>
                  <div class="surousel-descript">
                    <span>企業理念</span>
                  </div>
                </div>
              </a>
            </div>

            <!-- 6枚目 -->
            <div class="curousel-visual">
              <a href="<?php echo home_url(); ?>/company#future">
                <!-- 構図全体のコンテナ -->
                <div class="curousel-plate curousel-profile">
                  <figure class="curousel-main-fig">
                    <img class="curousel-back-fig" src="<?php echo get_template_directory_uri(); ?>/image/MainVisual/OrgExplainCompany.png" alt="カルーセル背景" />
                  </figure>
                  <figure class="curousel-sub-fig">
                    <img class="curousel-snap-fig" src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic05-Company.png" alt="カルーセル図５" />
                  </figure>
                  <div class="surousel-descript">
                    <span>将来年表</span>
                  </div>
                </div>
              </a>
            </div>

          </div>

        </div>
      </section>
      <!-- カルーセルおわり -->

      <!-- 主記述部 -->
      <section class="main-description" id="top">
        <div class="main-description-company">

          <!-- 第一セクション -->
          <!-- 会社のプロフィール -->
          <section class="flexbox-right-company" id="profile">
            <!-- タイトル -->
            <div class="title-area-company">
              <div class="title-comp">
                <h3 class="h3-comp">会社のプロフィール</h3>
              </div>
              <div class="line-comp"></div>
            </div>
            <!-- 文章 -->
            <div class="text-area-company">
              <p class="regtext std-tx-color">
                　私たちはITの世界で「ソフトウェアを作ること」によりみなさまにサービスや製品を提供します。大切な家族と支え合い大事な親を看ていくためにリモート・オフィスを中心とした活動でそれを実現します。
              </p>
              <p class="regtext std-tx-color">
                　私たちはWebページやWebサイトを制作するサービスを提供します。さらに「サービス説明」であげていますWebだけに限らないシステムの製作や、ITサービスの準備のお手伝い、IT製作を高度化する支援なども提供します。
              </p>
              <p class="regtext std-tx-color">
                　ミカゲITラボはこれらのサービスを始めるまでにすでに40年近くの年月をかけて多くのITサービスを提供してきました。<br/>
                　パーソナル・コンピュータの出現、インターネットによる情報サービスの爆発的拡大、Web検索やソーシャル・ネットワーキング・サービスによる情報サービスの大衆化、いまではITが仮想空間から様々なサービスを提供していて日常生活の中で不可欠なものになっています。
              </p>
              <p class="regtext std-tx-color">
                　私たちはこれらの出現に立ち合い、これらの発展をリアルタイムで手伝ってきました。<br/>
                　私たちの強みは、ソフトウェア自身やそれを造る技術の進歩、アプリケーションが動く基盤が発達。この過程に長く携わて来た歴史にあります。<br/>
                　みなさまに提供するサービスはこの長年の経験と技術に裏打ちされたものです。
              </p>
            </div>
            <!-- 図 -->
            <figure class="figure-area-company">
              <img src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic01-Company.png" alt="図２" />
            </figure>            <!-- 先頭に戻る -->
            <div class="return-top-company">
              <span><a href="#main">先頭に戻る</a></span>
            </div>
          </section>

          <!-- 第二セクション -->
          <!-- 新たなITのありかた -->
          <section class="flexbox-left-company" id="next-it">
            <!-- タイトル -->
            <div class="title-area-company">
              <div class="title-comp">
                <h3 class="h3-comp">新たなITのありかた</h3>
              </div>
              <div class="line-comp"></div>
            </div>
            <!-- 文章 -->
            <div class="text-area-company">
              <p class="regtext std-tx-color">
                　「ソフトウェアを作る」といいましたが、「アプリケーション」をただ作るのではなく、なぜこの「アプリケーション」が必要とされているのか、これをどのように使いたいのかを明らかにしながら造る。そこに夢をもったことがこの企業活動を始めた動機です。
              </p>
              <p class="regtext std-tx-color">
                　現在の「ITの仕組みありき」で考えるのではなく、「我々は何をしたいのか」、「どのようにしたいのか」、「どのようになりたいのか」を考えながらITの仕組みや使い方を人間の方へ合わせていく。
              </p>
              <p class="regtext std-tx-color">
                　どのように造れば人間本位になるのかを考える。ITが素直に使えるものになるように創り直していく。<br/>
                　私たちは単なる製造者ではなく、お客様といっしょに新しいITの探究者になりたいと思いました。
              </p>
            </div>
            <!-- 図 -->
            <figure class="figure-area-company">
              <img src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic02-Company.png" alt="図４" />
            </figure>
            <!-- 先頭に戻る -->
            <div class="return-top-company">
              <span><a href="#main">先頭に戻る</a></span>
            </div>
          </section>

          <!-- 第三セクション -->
          <!-- 私たちの夢の実現 -->
          <section class="flexbox-right-company" id="our-dream">
            <!-- タイトル -->
            <div class="title-area-company">
              <div class="title-comp">
                <h3 class="h3-comp">私たちの夢の実現</h3>
              </div>
              <div class="line-comp"></div>
            </div>
            <!-- 文章 -->
            <div class="text-area-company">
              <p class="regtext std-tx-color">
                　ITが人間の考え方や行動の仕方に合っている。日常生活になじんで自然とそこに「ある」ものになっている。
              </p>
              <p class="regtext std-tx-color">
                　ただITの仕掛けは人類の長年の英知の結集です。ハードウェアを見ても簡単に創り直せるものではありません。<br/>
                　そこでわたしたちが長けているソフトウェアの工夫でハードウェアの人間的でない面を包み隠す。日常生活に溶けこむよう工夫を凝らす。これが私たちの使命であると考えています。
              </p>
              <p class="regtext std-tx-color">
                　これを実現するためには多くの人たちの英知が必要です。ここで生まれた恩恵を流布していくためには多くの人たちからの支持も必要となるでしょう。<br/>
                　これを実現するためには一個人の力だけではなく会社という形が必要になると考えました。
              </p>
              <p class="regtext std-tx-color">
              </p>
            </div>
            <!-- 図 -->
            <figure class="figure-area-company">
              <img src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic03-Company.png" alt="図６" />
            </figure> <!-- 先頭に戻る -->
            <div class="return-top-company">
              <span><a href="#main">先頭に戻る</a></span>
            </div>
          </section>

          <!-- 第四セクション -->
          <!-- 企業理念 -->
          <section class="flexbox-left-company" id="cimpacy">
            <!-- タイトル -->
            <div class="title-area-company">
              <div class="title-comp">
                <h3 class="h3-comp">企業理念</h3>
              </div>
              <div class="line-comp"></div>
            </div>
            <!-- 文章 -->
            <div class="text-area-company">
              <p class="regtext std-tx-color">
                　これらを行っていくために会社の理念を４つ掲げました。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;信用と信頼を貫く</h3>

              <p class="sub-text-comp regtext std-tx-color">
                私たちはみなさまとの関係や活動について、またみなさまへ提供する成果について、その信用を保ち信頼を向上させることを第一義とします。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;正しいことを提供する</h3>

              <p class="sub-text-comp regtext std-tx-color">
                すべての事柄の原因と結果について、またそれが生じる真の過程について。私たちはそこにある真理を常に思索し探求しつづけ、自らの意識と行動を高めていきます。<br/>
                そして、そこで見いだした成果をみなさまに還元します。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;先を知り、主流を成す</h3>

              <p class="sub-text-comp regtext std-tx-color">
                それが意味のある先端と成るものであるのかを見極め、そこにある知識や技術を理解し、それを活用するための着想に長けるために技量を磨きます。<br/>
                私たちは得られた知見と成果から先取なものを創造して、創り出したことが未来の主流となるための努力を惜しみません。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;倫理を堅持する</h3>

              <p class="sub-text-comp regtext std-tx-color">
                道理や規範を熟慮し人類普遍な倫理を追求します。<br/>そして私たちは自重して倫理に従った企業活動を行ないます。
              </p>

            </div>
            <!-- 図 -->
            <figure class="figure-area-company">
              <img src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic04-Company.png" alt="図８" />
            </figure>
            <!-- 先頭に戻る -->
            <div class="return-top-company">
              <span><a href="#main">先頭に戻る</a></span>
            </div>
          </section>

          <!-- 第五セクション -->
          <!-- 将来年表 -->
          <section class="flexbox-right-company" id="future">
            <!-- タイトル -->
            <div class="title-area-company">
              <div class="title-comp">
                <h3 class="h3-comp">将来年表</h3>
              </div>
              <div class="line-comp"></div>
            </div>
            <!-- 文章 -->
            <div class="text-area-company">
              <p class="regtext std-tx-color">
                　私たちは夢の実現のために３つの成長段階を計画しました。
              </p>

              <h3 class="title-in-text-comp std-tx-color">創業期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                目的の実現のために会社が短期でIT分野で成長し存在感を示せるよう、最初は「Web開発」に活動の主流をおくことにしました。<br/>
                ただIT分野は"光速"で進歩します。私たちが取り残されないようWeb以外も仕事として取り組むことを上げています。
              </p>

              <h3 class="title-in-text-comp std-tx-color">開発期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                ITが人間と素直に関わりあうための技術や技法を創造する期です。<br/>
                新たなことを創るためには少人数で練り上げることがよいと経験的に感じています。<br/>
                この期では新たな考えを創り出すために、もっぱら拡大することを考えた活動は行いません。<br/>
                ただ前期に比べて製造から研究・創作活動へシフトします。それを継続的に行うためには利潤を確保していく工夫は必要です。この期はこれも考慮して計画を立てます。
              </p>

              <h3 class="title-in-text-comp std-tx-color">製造期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                新たな技術や技法を世の中に提供する期です。<br/>
                広範に頒布するために企業活動を拡大します。<br/>
                新たに創った技術の展開は、サービスや関連商品の製造と販売、また、技術展開のための媒体を利用した情報展開を行います。
              </p>

              <p class="regtext std-tx-color">
                <br/>このあとにもう１期、計画を追加します。
              </p>

              <h3 class="title-in-text-comp std-tx-color">企業活動の終了期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                創った理論や技法を改良していくための方針と製造・販売活動の展開戦略が合わなくなるでしょう。<br/>
                また、創造したことを発展・成熟させるためには、ここでもう一度熟考することが必要となるでしょう。<br/>
                それを行うために製造・販売活動を第三者に譲って企業活動を終了します。<br/>
                私たちが創出した理論や技法は企業活動の終了時に分離して、別の活動主体に移して引き続き改良していきます。
              </p>

            </div>
            <!-- 図 -->
            <figure class="figure-area-company">
              <img src="<?php echo get_template_directory_uri(); ?>/image/Company/Pic05-Company.png" alt="図１０" />
            </figure> <!-- 先頭に戻る -->
            <div class="return-top-company">
              <span><a href="#main">先頭に戻る</a></span>
            </div>
          </section>

        </div>
      </section>

    </main>

<?php get_footer(); ?>