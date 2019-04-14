<div>
  <div class="system-contents__detail">

    <p class="system_contents__detail-header">課題1　仮想環境にPHPをインストールする</p>
    <p>
      <br>
      １．PHPについて、Webや書籍などを参考にどのようなものか調査してください。<br>
      <br>
      ２．レベル1で構築したLinux環境にPHPをインストールしてください。<br>
      <br>
      【課題条件】<br>
       ・ダウンロードした教材ファイルの「調査資料_解答.txt」に解答を入力<br>
      ・インストールするPHPのバージョンは「7.x系」とする<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題2　仮想環境にMySQLをインストールする</p>
    <p>
      <br>
      １．RDBMS、MySQLについて、Webや書籍などを参考にどのようなものか調査してください。<br>
      <br>
      ２．レベル1で構築したLinux環境にMySQLをインストールしてください。<br>
      <br>
        【課題条件】<br>
      ・ダウンロードした教材ファイルの「調査資料_解答.txt」に解答を入力<br>
      ・インストールするMySQLのバージョンは「5.x系」とする<br>
      <br>
      <br>
    </p>
    
    <p class="system_contents__detail-header">課題3　仮想環境にphpMyAdminをインストールする</p>
    <p>
      <br>
      １．レベル1で構築したLinux環境にPHPMyAdminをインストールしてください。<br>
      <br>
        【課題条件】<br>
      ・インストールするphpMyAdminのバージョン指定は無し<br>
      <br>
      <br>
    </p>



   <p class="system_contents__detail-header">提出ファイル</p>
    <p>
      <br>
      【ファイル名　】 L2_lamp_氏名<br>
       【ファイル形式】 zip<br>
       【ファイル内容】<br>
   ・調査資料_解答.txt<br>
     ・自分のPCブラウザから接続したphpinfo()のスクリーンショット画像（拡張子の指定なし）<br>
   ・自分のPCブラウザから接続したphpMyAdminログイン後のスクリーンショット画像（拡張子の指定なし）<br>
      <br>
      <br>
      制作したファイルは、教材一覧画面からアップロードしてください。<br>
      <br>
      <br>
    </p>

  </div>
</div>
<div class="system-contents__download">
<?php if($systemContent['file_type'] == 1): ?>
  <a target="_blank" href="<?= $this->Url->build(['controller'=>'systemContents', 'action'=>'download', $systemContent['id'], $systemContent['parent_category_id'], $systemContent['system_category_id']]) ?>">
<?php elseif($systemContent['file_type'] == 2): ?>
  <a href="<?= $this->Url->build(['controller'=>'systemContents', 'action'=>'download', $systemContent['id'], $systemContent['parent_category_id'], $systemContent['system_category_id']]) ?>">
<?php endif; ?>
    <button class="linkBtn_s box-color-<?= h($headerColor[$systemContent['level']]); ?>">教材をダウンロードする</button>
  </a>
</div>