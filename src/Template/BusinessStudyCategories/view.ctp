<?php
?>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div class="box-shadow study-categories__box">
        <div class="box-header">
          <h1 class="study-categories__title2"><?= h($courseData->name); ?></h1>
        </div>
        <div class="box-body">

          <div class="study-categories__text">
              学習の進め方や評価に関して知りたい人は<a href="<?= $this->Url->build(['controller'=>'informations', 'action'=>'guide']) ?>">こちら</a>
          </div>

          <div class="study-categories__text">
              <?= h($courseData->name); ?>について知りたい人は<a href="">こちら</a>
          </div>

          <div class="study-categories__text">
              <b class="error-message"><i class="fa fa-warning"></i> 当web内の文章及びダウンロードされましたファイルを無断で複製、転載、配布する行為を禁止します。</b>
          </div>

        </div>
      </div>

      <div class="study-categories__content-title">
        <h2><span><i class="fas fa-pencil-alt"></i> 学習コンテンツ</span></h2>
      </div>

      <?php foreach ($studyDatas as $studyData): ?>
      <div class="study-categories__list">
        <div class="list__header categories-color__level--<?= $levelColor[$studyData['business_study_categories__level'] - 1] ?>">
          <div class="header__text1">
            <div>
              <span>レベル<?= h($studyData['business_study_categories__level']) ?></span>&nbsp;&nbsp;
              <span>
                <?php
                    $sub_name = str_replace(",", " + ", $studyData['business_study_categories__sub_name'], $cnt);
                    echo h($sub_name);
                ?>
              </span>
            </div>
            <div>
            <?php
            if ($studyData['business_study_categories__is_uploaded'] == 0):
                  $check_status_flg = ($studyData['business_upload_contents__check_status_flg'] !== null) ? $studyData['business_upload_contents__check_status_flg'] : 0;
                  $check_score = ($studyData['business_upload_contents__check_score'] !== null) ? $studyData['business_upload_contents__check_score'] : 0;
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
            <h3><?= h($studyData['business_study_categories__name']) ?></h3>
            <div>
              <span>
                <a href="<?= $this->Url->build(['controller'=>'businessStudyCategories', 'action'=>'detail', h($courseData->id), h($studyData['business_study_categories__id'])]) ?>">
                  <button class="study__button box-color-o">概要を見る</button>
                </a>
              </span>
              <span>
              <?php if ($studyData['business_study_categories__is_uploaded'] == 0): ?>
                <a href="<?= $this->Url->build(['controller'=>'businessUploadContents', 'action'=>'add', h($courseData->id), $studyData['business_study_categories__id']]) ?>">
                  <button class="study__button box-color-r">アップロード</button>
                </a>
              <? else: ?>
                  <a href="">
                  <button class="study__button study__button--disabled box-color-r" disabled>アップロード</button>
                </a>
              <? endif; ?>
              </span>
            </div>
          </div>
        </div>

        <div class="study-contents__list">
        <?php if(count($studyData['contents']) > 0): ?>
          <?php foreach ($studyData['contents'] as $studyContent): ?>
          <div class="study-contents__row2">
              <div>
                  <h4><span>Study<?= $studyContent['level']?>.</span> <?= $studyContent['name']?></h4>
              </div>
              <div>
                <span>
                  <a href="<?= $this->Url->build(['controller'=>'businessStudyContents', 'action'=>'detail', $studyContent['id']]) ?>">
                    <button class="study__button box-color-o">学習する</button>
                  </a>
                </span>
              </div>
          </div>
          <?php endforeach; ?>
        <?php else: ?>
            <div class="study-contents__row2">現在制作中です。しばらくお待ちください。</div>
        <?php endif; ?>
        </div>

      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
<!-- /.content -->