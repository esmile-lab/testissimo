<?php
$categoryStr = $studyData['game_course_categories__name'] . " ▶ " . $studyData['game_study_categories__name'];
?>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div class="back__button">
        <?php if($isEnableBack): ?>
          <a href="<?= h($referer) ?>" class="btn box-color-gr">戻る</a></div>
        <?php endif; ?>
      <div>

      <div class="study-categories__list">
        <div class="list__header categories-color__upload--r">
          <div class="header__text1">
            <div>
              <span>ファイルアップロード</span>&nbsp;&nbsp;
              <span></span>
            </div>
            <div>
            <?php
            if ($studyData['game_study_categories__is_uploaded'] == 0):
                  $check_status_flg = ($studyData['game_upload_contents__check_status_flg'] !== null) ? $studyData['game_upload_contents__check_status_flg'] : 0;
                  $check_score = ($studyData['game_upload_contents__check_score'] !== null) ? $studyData['game_upload_contents__check_score'] : 0;
            ?>
              <span><b class="study__status system-contents__color-<?= $check_status_flg; ?>"><?= $studyStatus[$check_status_flg] ?></b></span>&nbsp;
              <span class="study__meter"><meter min="0" max="100" low="75" high="95" optimum="100" value="<?= h($check_score); ?>"></meter></span>&nbsp;
              <span class="study__score"><b><?= h($check_score); ?></b> スコア</span>
              <?php if ($check_status_flg != 0): ?>
<!--
              <span>
                <a href="">
                  <button class="study__button button--review box-color-gr">評価を見る</button>
                </a>
              </span>
-->
            <?php
                    endif;
            endif;
            ?>
            </div>
          </div>
          <div class="header__text2">
            <h3>
              <?= $categoryStr ?>
            </h3>
            <div>
              <span></span>
            </div>
          </div>
        </div>

        <div class="study-contents__detail">
          <div class="detail__content">
              <h4><span></span>学習した課題内容を評価してもらおう！</h4>
              <p>
                あなたが学習した内容を専門の講師に採点・評価してもらいましょう。<br>
                <small>※採点・評価方法について知りたい人は<a href="<?= $this->Url->build(['controller'=>'Informations', 'action'=>'guide', "#" => "score"]) ?>">こちら</a></small><br>
                学習した課題ファイルは、zipファイルにまとめてアップロードしてください。<br>
                <small>※どうしてもzipにできない場合はワード、エクセル、PDF等でもアップロードする事ができます。</small><br>
                コメントには、提出する課題についての説明や、質問事項などを入力してください。<br><br>
                <b class="error-message"> ― 課題提出時の注意事項 － </b><br>
                　担当者からメールが届く事がありますので、PCメールの受信を拒否に設定されている方は、<br>
                　PCメールを許可するか、「@smile-fortissimo.com」のメールのみ受信できるように設定してください。<br>
                　課題に関しての部分的なアドバイスは基本的に行っていません。課題提出後の評価コメントを参考にしてください。<br>
                　課題に関してより具体的なアドバイスを希望する人、さらなるスキルアップを目指す人は、是非<a href="">こちら</a>をご利用ください。<br>
              </p>
          </div>

          <div class="detail__content">
            <form>
              <h4><label for="name">課題ファイル<span class="common__input--required">＊</span></label></h4>
              <p><input type="file" name="name" id="name"/></p>

              <h4>
                <label for="comment">コメント<span class="common__input--required">＊</span></label>
              </h4>
              <p>
                <textarea name="comment" id="comment" rows="10" placeholder="コメントを入力"></textarea>
              </p>
              
              <div>
                <button type="button" class="study__button study__button--dl box-color-r" onclick="addAction();">アップロードする</button>
              </div>

              <input type="hidden" name="game_study_category_id" id="game-study-category-id" value="<?= h($studyData['game_study_categories__id']) ?>" >
              <input type="hidden" name="category_name" id="category-name" value="<?= h($categoryStr) ?>">
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->