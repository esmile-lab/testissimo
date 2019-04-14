<?php
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
                <?php if($studyData['business_study_categories__is_downloaded'] == 0): ?>
                  <a href="<?= $this->Url->build(['controller'=>'businessStudyCategories', 'action'=>'download', $studyData['business_study_categories__business_course_category_id'], $studyData['business_study_categories__id'], 'contents']) ?>">
                    <button class="study__button study__button--dl box-color-b">教材をダウンロードする</button>
                  </a>
                <? else: ?>
                  <a href="">
                    <button class="study__button study__button--dl box-color-b study__button--disabled" disabled>教材をダウンロードする</button>
                  </a>
                <? endif; ?>
              </span>
            </div>
          </div>
        </div>

        <div class="study-contents__detail">
          <?= $this->element($detailTemp, ['studyData' => $studyData]); ?>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- /.content -->