
<?php get_header(); ?>

    <!-- メイン -->
    <main id="main">

      <!-- メインビジュアル -->
      <section class="main-visual main-visual-inquiry">
        <figure class="main-visula-fig">
          <img src="" alt="メインビジュアルの背景図" />
        </figure>
        <div class="main-visual-title-panel">
          <div class="main-visual-title-area main-visual-title-area-aboutus">
            <h3 class="main-visual-title main-visual-title-figure-aboutus">
              <span>Inquiry(非表示)<span>
            </h3>
            <p class="main-visula-narration main-visula-narration-aboutus">
              副題（非表示）
            </p>
          </div>
        </div>

      </section>

      <!-- 主記述部 -->
      <section class="main-description">
        <div class="main-description-inquiry">

          <!-- 全体構成 -->
          <div class="description-inquiry">

            <h3>問い合わせ</h3>

            <p class="caution-inquiry" style="font-size:1.2rem;color: #a11737">
              ※ただいまサーバーを移設しているため、このフォームでの連絡は中止しています。<br />お手数ですがメール<br/><spam>accueil@mikage-it-lab.com</spam><br/>宛でご連絡をお願いします。
            </p>

            <form class="form-inauiry" id="form-inauiry" action="send-email.php" method="post">

              <!-- 名前 -->
              <div id="name" class="oneline-inquery container-inquiry">
                <div class="label-inquiry child-label-inquiry">
                  <spam class="regtext" for="username-obj">お名前　【全角】</spam>
                  <spam class="caution-inquery">※必須</spam>
                </div>
                <div class="body-inquiry child-body-inquiry">
                  <input id="username-obj" type="text" name="username" placeholder="入力してください..." class="contact-textbox" />
                </div>
              </div>

              <!-- 性別 -->
              <div id="sex" class="oneline-inquery container-inquiry">
                <div class="label-inquiry child-label-inquiry">
                  <spam class="regtext">性別</spam>
                  <spam class="caution-inquery">※必須</spam>
                </div>
                <div class="body-inquiry child-body-inquiry radiobox-inquiry sex-inquiery">
                  <label class="regtext-small" for="male"><input type="radio" name="sex" value="male" id="male">男性　</label>
                  <label class="regtext-small" for="email"><input type="radio" name="sex" value="female" id="femail">女性　</label>
                  <label class="regtext-small" for="other-sex"><input type="radio" name="sex" value="other" id="other-sex">その他　</label>
                </div>
              </div>

              <!-- 電話番号 -->
              <div id="tel" class="oneline-inquery container-inquiry">
                <div class="label-inquiry child-label-inquiry">
                  <spam class="regtext" for="telephone-no">電話番号</spam>
                </div>
                <div class="body-inquiry child-body-inquiry">
                  <input id="telephone-no" type="text" name="tel-no" size="13" class="contact-textbox" placeholder="090-1234-5678" />
                </div>
              </div>

              <!-- 電子メール -->
              <div id="tel" class="oneline-inquery container-inquiry">
                <div class="label-inquiry child-label-inquiry">
                  <spam class="regtext" fot="mail-object">電子メール</spam>
                  <spam class="caution-inquery">※必須</spam>
                </div>
                <div class="body-inquiry child-body-inquiry">
                  <input id="mail-object" type="text" name="email" size="28" class="contact-textbox" placeholder="username@example.com" />
                </div>
              </div>

              <!-- どこで知りましたか -->
              <div class="query container-02-inquiry">
                <div class="label-02-inquiry child-label-02-inquiry" for="whereis">
                  <spam>どこでミカゲＩＴラボを</spam><span></span>知りましたか？</spam>
                  <spam class="caution-inquery">　※1つ以上選択</spam>
                </div>
                <select class="body-02-inquiry child-body-02-inquiry checkbox-inquiry" name="whereis[]" id="whereis" multiple>
                  <option value="家族から">家族から　</option>
                  <option value="知人から">知人から　</option>
                  <option value="クチコミで">クチコミで　</option>
                  <option value="ネットを検索して">ネットを検索して　</option>
                  <option value="ネットの記事から">ネットの記事から　</option>
                  <option value="SNSで見かけた">SNSで見かけた　</option>
                  <option value="ほかのサイトで知った">ほかのサイトで知った　</option>
                  <option value="雑誌で見た">雑誌で見た　</option>
                  <option value="インターネット広告">インターネット広告　</option>
                  <option value="ダイレクト・メール">ダイレクト・メール　</option>
                </select>

<!--                <div class="body-02-inquiry child-body-02-inquiry checkbox-inquiry">
                  <div class="flex-inquiry regtext-small">
                    <label for="from-family"><input type="checkbox" name="whereis" value="家族" id="from-family"> 家族から　　</label>
                    <label for="from-frend"><input type="checkbox" name="whereis" value="知人" id="from-frend"> 知人から　　</label>
                    <label for="word-of-mouth"><input type="checkbox" name="whereis" value="クチコミで" id="word-of-mouth"> クチコミで</label>
                  </div>
                  <div class="flex-inquiry regtext-small">
                    <label for="search-net"><input type="checkbox" name="whereis" value="ネット検索" id="search-net"> ネットを検索して　</label>
                    <label for="net-journal"><input type="checkbox" name="whereis" value="ネット記事" id="net-journal"> ネットの記事から　</label>
                    <label for="from-SNS"><input type="checkbox" name="whereis" value="SNS" id="from-SNS"> SNSで見かけた　</label><br>
                    <label for="from-other-site"><input type="checkbox" name="whereis" value="他サイト" id="from-other-site"> ほかのサイトで知った</label>
                  </div>
                  <div class="flex-inquiry regtext-small">
                    <label for="from-magazine"><input type="checkbox" name="whereis" value="雑誌" id="from-magazine"> 雑誌で見た　　</label>
                    <label for="from-net-ad"><input type="checkbox" name="whereis" value="ネット広告" id="from-net-ad"> インターネット広告　　</label>
                    <label for="from-direct-mail"><input type="checkbox" name="whereis" value="ダイレクト" id="from-direct-mail"> ダイレクト・メール</label>
                  </div> -->
                </div>
              </div>

              <!-- お問い合わせ -->
              <div id="tel" class="oneline-inquery container-inquiry">
                <div class="label-inquiry child-label-inquiry">
                  <spam class="regtext" for="inquiry-purpose">問い合わせの目的</spam>
                  <spam class="caution-inquery">※必須</spam>
                </div>
                <div class="sort-inquiry select-inquiry child-body-inquiry  select-inquiry">
                  <select id="inquiry-purpose" name="inquiry-purpose" class="selectbox-inquiry">
                    <option value="問合せ">お問い合わせ</option>
                    <option value="要望">ご要望</option>
                    <option value="意見">ご意見</option>
                    <option value="感想">ご感想</option>
                    <option value="その他">その他</option>
                  </select>
                </div>
              </div>

              <!-- その他のお問い合わせ -->
              <div id="purpose-other" class="squery container-02-inquiry sp-query">
                <div class="label-02-inquiry child-label-02-inquiry">
                  <spam class="regtext-small" for="other-inquiry-object">「その他」を選ばれたときにはご入力ください</spam>
                  <spam class="caution-inquery"> ※必須20文字以内</spam>
                </div>
                <input id="other-inquiry-object" type="text" name="other-inquiry" size="20" class="contact-textbox child-body-02-inquiry other-inquiry"
                placeholder="その他お問合せの目的..." />
              </div>

              <!-- お問い合わせの内容 -->
              <div id="query-content" class="manyline-query container-03-inquiry">
                <div class="label-02-inquiry  child-label-03-inquiry">
                  <spam for="contact-textarea">お問い合わせの内容</spam>
                  <spam class="caution-inquery"> ※必須200文字以内</spam>
                </div>
                <div class="body-02-inquiry child-body-03-inquiry textarea-inquiry">
                  <textarea id="contact-textarea" placeholder="ご記入ください..." name="inquiry-message" rows="5" maxlength="200"></textarea>
                </div>
              </div>

              <!-- 問合せ送信ボタン -->
              <div id="send-btn">
                <input id="submit" type="image" src="<?php echo get_template_directory_uri(); ?>/image/Button/button-send-active.png" alt="送信ボタン" />
              </div>
              <div id="nosend-btn">
                <img id="no-submit" src="<?php echo get_template_directory_uri(); ?>/image/Button/button-send-noactive.png" alt="送信不可ボタン">
              </div>

            </form>

          </div>

        </div>
      </section>

    </main>

<?php get_footer(); ?>