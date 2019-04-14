<div>
  <div class="system-contents__detail">

    <p class="system_contents__detail-header">課題</p>
    <p>
      <br>
       １．課題1～課題20に対し、正しい解答を入力してください。<br>
       <br>
       <br>
       【課題について】<br>
      １．教材をダウンロードし、ファイルを解凍してください。<br>
      <br>
      ２．解凍したファイルを仮想環境のWEBサーバーに配置します。<br>
      配置先：/var/www/html/<br>
      表示URL：http://【IPアドレス or ドメイン】/L1_php_basic/php/<br>
      <br>
      ３．L1_php_basic/php/test.phpをエディタで開き、解答を記述してください。<br>
      <br>
      <br>
    </p>

   <p class="system_contents__detail-header">提出ファイル</p>
    <p>
      <br>
      【ファイル名　】 L1_php_basic_氏名<br>
       【ファイル形式】 zip<br>
       【ファイル内容】<br>
   解答ファイル（test.php）だけでなく、ダウンロードした教材ファイルも含めてzipにしてください。<br>
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