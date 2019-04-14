<div>
  <div class="system-contents__detail">

    <p class="system_contents__detail-header">課題</p>
    <p>
      <br>
       １．課題1～課題15に従って、処理を追加してください。<br>
       <br>
       <br>
       【課題について】<br>
      １．教材をダウンロードし、ファイルを解凍してください。<br>
      <br>
      ２．「test.html」、「test.js」をエディタで開き、処理を記述してください。<br>
      ※「test.html」をWEBブラウザで開くと、画面を確認しながら作業をする事ができます。<br>
      <br>
      <br>
    </p>

   <p class="system_contents__detail-header">提出ファイル</p>
    <p>
      <br>
      【ファイル名　】 L1_js_basic_氏名<br>
       【ファイル形式】 zip<br>
       【ファイル内容】<br>
   解答ファイルだけでなく、ダウンロードした教材ファイルも含めてzipにしてください。<br>
      <br>
      <br>
      制作したファイルは、教材一覧画面からアップロードしてください。<br>
      <br>
      <br>
    </p>

<br>
  </div>
</div>
<div class="system-contents__download">
<?php if($systemContent['file_type'] == 2): ?>
  <a href="<?= $this->Url->build(['controller'=>'systemContents', 'action'=>'download', $systemContent['id'], $systemContent['parent_category_id'], $systemContent['system_category_id']]) ?>">
<?php endif; ?>
    <button class="linkBtn_s box-color-<?= h($headerColor[$systemContent['level']]); ?>">教材をダウンロードする</button>
  </a>
</div>