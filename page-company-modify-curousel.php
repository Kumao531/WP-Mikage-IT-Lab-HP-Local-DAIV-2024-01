
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
                　私たちはITの世界で「ソフトウェアを作る」ことにより、みなさまへITのサービスや製品を提供いたします。<br/>
                　その制作は、私たちのリモート・オフィスを中心とした活動で実現してまいります。
              </p>
              <p class="regtext std-tx-color">
                　提供するサービスとしては、WebページやWebサイトの制作などを承ります。<br/>
                　さらに、私たちが「サービス説明」のページで上げていますWebだけに限らないシステムの製作や、お客様が求めるITサービスを準備するお手伝い、IT製作活動自身の高度化など、ご要望に合わせサービスを提供します。
              </p>
              <p class="regtext std-tx-color">
                　ミカゲITラボとしてサービスの提供をはじめるまでに、すでに40年近くの年月をかけて多くのITサービスをみなさまへ提供してまいりました。<br/>
                　パーソナル・コンピュータの出現、インターネットによる情報サービスの爆発的拡大、Web検索やソーシャル・ネットワーキング・サービスの出現による情報サービスの大衆化、いまではITは新たな仮想空間から様々なサービスを提供しすることを始めて、みなさまの日常生活の中において不可欠なものになってきています。
              </p>
              <p class="regtext std-tx-color">
                私たちはこれらの出現に立ち会い、これらの発展をリアルタイムで手伝ってまいりました。<br/>
                　私たちの強みは、ソフトウェア・アプリケーション制作と、そのアプリケーション基盤の発展に長く携わて来た歴史にあります。<br/>
                　みなさまに提供するサービスは、この長年の経験と技術に裏打ちされたものです。
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
                　「ソフトウェアを作る」と述べましたが、みなさまが求める「アプリケーション」を単に作るだけではなく、その「アプリケーション」がなぜ必要とされているのか、どのように使いたいのかを明らかにしていくことが重要なことと考えています。
              </p>
              <p class="regtext std-tx-color">
                　そこに私たちの夢があり、この企業活動を始めようとした理由があります。
              </p>
              <p class="regtext std-tx-color">
                　現在行われているような「ITの仕組みありき」で考えるのではなく、まず「我々は何をしたいのか、どのようにしたいのか、どのようになりたいのか」を考え、「ITの仕組み」の在り方や使い方を人間の方へ合わせていくこと。
              </p>
              <p class="regtext std-tx-color">
                　我々がどうしたいかありきで、人間本位でITのありかたを考える。<br/>
                　ITが素直に使えるものにするために、必要であればITがそうなるように私たちはITを創りなおします。<br/>
                　私たちは単なる製造者ではなく、お客様とともに新しいITがあるべき世界への探究者でありつづけたいと考えました。
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
                　ITが人間的であるためには、人間の考え方や行動のやり方の方にITを合わせる。そしてITは私たちの日常生活になじんで自然にそこに「ある」べきものだと考えました。
              </p>
              <p class="regtext std-tx-color">
                　ただ、ITの機械的な仕掛けは人類の長年の英知の結集であります。ハードウェアというくくりだけ見ても簡単に創りなおせるものではないと考えています。<br/>
                　そこでわたしたちが長けている、ソフトウェアの工夫でハードウェアの人間的ではない面を包み隠し、私たちの生活に差しさわりがないように溶け込ませるための工夫を凝らしていきたいと考えています。
              </p>
              <p class="regtext std-tx-color">
                　この実現を考えたときに、多くの人々の英知を集めて、より人間的なITの仕組みを創り出す。出来上がった恩恵を多くの人々に流布して多くの方々から支持を得る。<br/>
                　そのためには、一個人の力だけではなく会社という形で実現することを考えました。
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
                　ここままで述べたことを実現するために、私たちは様々なことに素直に応える必要があると考えました。<br/>
                　そこで私たちは興す会社の理念としてつぎの４つを掲げます。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;信用と信頼を貫く</h3>

              <p class="sub-text-comp regtext std-tx-color">
                私たちは皆様との関係や活動で、また皆様へ提供する成果で、その信用を常に保ち、信頼を常に向上させることを第一義とします。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;正しいことを提供する</h3>

              <p class="sub-text-comp regtext std-tx-color">
                すべての事柄の原因と結果について、またそれが生じる真の過程について。私たちはそこにある真理を常に思索し探求しつづけ、自らの意識と行動を高めていきます。<br/>
                そして、そこで見いだした成果を皆様に還元します。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;先を知り、主流を成す</h3>

              <p class="sub-text-comp regtext std-tx-color">
                それが意味のある先端であることを見極め、そこにある知識や技術を理解して、その活用の着想に長けるための技量を磨きます。<br/>
                その知見から得られた成果から、先取なサービスを創造するとともに、そこで創り出したものを未来の主流とするための努力を惜しみません。
              </p>

              <h3 class="title-in-text-comp std-tx-color">&#9670;倫理を堅持する</h3>

              <p class="sub-text-comp regtext std-tx-color">
                道理や規範を熟慮して人類普遍な倫理を追求します。<br/>そして私たちは自重して、その倫理に従い企業活動を行ないます。
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
                　私たちはこの夢の実現のために３つの成長段階を計画しました。
              </p>

              <h3 class="title-in-text-comp std-tx-color">創業期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                目的の実現のため会社が短期でIT分野で成長し存在感を示せるように、最初に述べた「Web開発」に活動の主流をおくことにしました。<br/>
                ただIT分野は"光速"で進歩しますので、私たちが取り残されないようにWeb技術以外についても仕事として取り組むことを上げています。
              </p>

              <h3 class="title-in-text-comp std-tx-color">開発期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                ITが人間と素直に関わりあうための技術や技法を創造する期です。<br/>
                新たなことを創るためには少人数で練り上げることがよい進め方であることを経験的に感じています。<br/>
                そのためこの期では積極的に企業活動の拡大は予定はしていません。<br/>
                ただこの期の考慮に盛り込むことは、前の創業期に比べて製造活動から研究・創作活動にシフトするので利潤の確保に工夫が必要になります。この期の計画においてはこの点を考慮に入れます。
              </p>

              <h3 class="title-in-text-comp std-tx-color">製造期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                人間と関わりあう新たな技術や技法を世の中に提供する期です。<br/>
                広範に頒布するために企業活動を拡大します。<br/>
                新たに創った技術の展開方法は、サービスや関連商品の製造と販売、また、技術展開のための媒体を利用した情報展開を行います。
              </p>

              <p class="regtext std-tx-color">
                <br/>さらにこのあともう１期を企業活動に追加します。
              </p>

              <h3 class="title-in-text-comp std-tx-color">企業活動の終了期：</h3>

              <p class="sub-text-comp regtext std-tx-color">
                理論や技法の改良に対して製造・販売活動の展開戦略が合わなくなるでしょう。<br/>
                また、創造した文化を発展・成熟させるためには、もう一度熟考する必要が出てくるはずです。<br/>
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