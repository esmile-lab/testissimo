<div>
  <div class="system-contents__detail">

    <p class="system_contents__detail-header">課題</p>
    <p style="color:#ff0000;font-weight:bold;">※この課題は「ユーザー管理アプリ1 新規登録編」を達成している必要があります。</p>
    <br>
    <p>
       １．「ユーザー管理アプリ1 新規登録編」で追加したユーザーを、アプリ画面の右側に一覧で表示してください。<br>
       　ユーザー情報を表示するhtmlタグは、ダウンロードした「user.html」に記述されていますので、確認してください。
    </p>
    <br>
    <p>
       ２．ユーザーの一覧に検索機能を追加してください。<br>
       　検索用の入力ボックス、検索ボタンは、ダウンロードした「user.html」に記述されていますので、確認してください。
    </p>
    <br>
    <br>

    <p class="system_contents__detail-header">制作方法</p>
    <br>
    <p>
      １．教材をダウンロードし、ファイルを解凍してください。
    </p>
    <br>
    <p>
      ２．解凍したファイルをWEBサーバーに配置します。<br>
      　表示URL：http://【IPアドレス or ドメイン】/L4_java_userapp2/html/user.html
    </p>
    <br>
    <p>
      ３．フロントエンド：「ユーザー管理アプリ1 新規登録編」で作成した「user.js」に処理を追加してください。<br>
      　　バックエンド　：「ユーザー管理アプリ1 新規登録編」で作成した「api/」に各機能ファイルを作成し、処理を追加してください。
    </p>
    <br>
    <br>

    <p class="system_contents__detail-header">制作条件</p>
    <br>
    <p>
      １．フロントエンド～サーバーエンド間のデータ送受信は全てajax通信（非同期）、JSON形式で行ってください。
    </p>
    <br>
    <p>
       ２．初期表示画面は、登録されている全てのユーザーが一覧で表示されるようにしてください。
    </p>
    <br>
    <p>
      ３．検索条件はユーザー名の文字列、部分一致（一文字でも合っていれば表示）を条件としてください。
    </p>
    <br>
    <p>
      ４．ユーザーが新規登録されたタイミングで一覧にも表示されるようにしてください。
    </p>
    <br>
    <br>

    <p class="system_contents__detail-header">提出ファイル</p>
    <br>
    <p>
      【ファイル名　】 L4_java_userapp2_氏名
    </p>
    <p>
       【ファイル形式】 zip
    </p>
    <p>
       【ファイル内容】<br>
   制作ファイルだけでなく、ダウンロードした教材ファイルも含めてzipにしてください。
    </p>
    <br>
    <br>
    <p>制作したファイルは、教材一覧画面からアップロードしてください。</p>
      <br>
      <br>

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