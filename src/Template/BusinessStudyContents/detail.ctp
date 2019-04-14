<?php
?>

<style>

</style>

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
        <div class="list__header categories-color__level--dg0">
          <div class="header__text1">
            <div>
              <span>Study<?= h($studyData['business_study_contents__level']) ?>.</span>&nbsp;&nbsp;
              <span>
                <?php
                    $sub_name = str_replace(",", " + ", $studyData['business_study_contents__sub_name'], $cnt);
                    echo h($sub_name);
                ?>
              </span>
            </div>
            <div></div>
          </div>
          <div class="header__text2">
            <h3><?= h($studyData['business_study_contents__name']) ?></h3>
            <div>
              <span></span>
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