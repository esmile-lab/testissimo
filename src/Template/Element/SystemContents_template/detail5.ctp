<?php
$viewFile = '/' . lcfirst($viewFilePath) . 'pid_' . $systemContent['parent_category_id'] . '/id_' . $systemContent['system_category_id'] . '/' . $systemContent['file_name'];
?>
<div>
  <div class="system-contents__detail">
    <iframe src="<?= $viewFile ?>" style="width:100%; height:1000px; border: none;">
      <button class="linkBtn_s box-color-<?= h($headerColor[$systemContent['level']]); ?>">教材をダウンロードする</button>
    </iframe>
  </div>
</div>
