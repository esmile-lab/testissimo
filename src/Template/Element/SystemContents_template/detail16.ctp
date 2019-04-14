<div>
  <div class="system-contents__detail">

    <p class="system_contents__detail-header">課題</p>
    <p>
      <br>
       １．ユーザー管理アプリの「ユーザー新規登録」機能を実装してください。<br>
       <br>
       <br>
       【課題について】<br>
      １．教材をダウンロードし、ファイルを解凍してください。<br>
      <br>
      ２．DB設計書に従って、データベースを構築してください。<br>
      <br>
      ３．解凍したファイルをWEBサーバーに配置します。<br>
      表示URL：http://【IPアドレス or ドメイン】/L4_java_userapp1/html/user.html<br>
      <br>
      ４．フロントエンド　：「user.js」に処理を追加してください。<br>
      　　バックエンド　　：「api/」に各javaファイルを作成し、処理を記述してください。<br>
      <br>
    </p>

   <p class="system_contents__detail-header">制作条件</p>
    <p>
      <br>
      １．フロントエンド～サーバーエンド間のデータ送受信は全てajax通信（非同期）、JSON形式で行ってください<br>
       <br>
       ２．入力値のチェックを行い、該当する「」内の文字列でアラート画面を出力してください。<br>
         （1） ユーザー名<br>
         　　・必須項目　「ユーザー名は必須項目です」<br>
         <br>
         （2） パスワード<br>
         　　・必須項目　「パスワードは必須項目です」<br>
         　　・8文字以上32文字以内　「パスワードの文字数が不正です」<br>
         　　・半角英数字のみ　「パスワードは半角英数字のみで入力してください」<br>
         <br>
         （3） パスワード確認用<br>
         　　・パスワードと同値　「パスワードと値が違います」<br>
         <br>
        （4） メールアドレス<br>
         　　・必須項目　「メールアドレスは必須項目です」<br>
         　　・半角英数字のみ　「メールアドレスは半角英数字のみで入力してください」<br>
         　　・「@」含む　「メールアドレスの形式が不正です」<br>
         <br>
        （5） 電話番号<br>
         　　・数値のみ　「電話番号は数値のみで入力してください」<br>
      <br>
      ３．登録に成功した場合は、「登録されました」のアラート画面を出力し、入力項目を全てクリアしてください。<br>
       <br>
      ４．登録に失敗した場合は、「登録に失敗しました【エラー内容】」のアラート画面を出力してください。<br>
       <br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">提出ファイル</p>
    <p>
      <br>
      【ファイル名　】 L4_java_userapp1_氏名<br>
       【ファイル形式】 zip<br>
       【ファイル内容】<br>
   制作ファイルだけでなく、ダウンロードした教材ファイルも含めてzipにしてください。<br>
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