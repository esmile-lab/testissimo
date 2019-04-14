<div>
  <div class="system-contents__detail">

    <p class="system_contents__detail-header">課題について</p>
    <p>
      <br>
      １．教材をダウンロードし、ファイルを解凍してください。<br>
      <br>
      ２．「test.txt」をエディタで開き、課題1～課題10に従って処理を記述してください。<br>
      <br>
      ３．課題に従って作成したデータベース情報をSQLファイルにエクスポートしてください。<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">提出ファイル</p>
    <p>
      <br>
      【ファイル名　】 L1_db_mysql_basic_氏名<br>
       【ファイル形式】 zip<br>
       【ファイル内容】<br>
   ・test.txt<br>
   ・test_db.sql<br>
      <br>
      <br>
      制作したファイルは、教材一覧画面からアップロードしてください。<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題1</p>
    <p>
      <br>
       １．RDBについて、Webや書籍などを参考にどのようなものか調査し、理解できた部分を解答ファイルに記述してください。<br>
       <br>
       ２．RDBMS製品について、MySQL以外にどのような製品があるかを調査し、一覧を解答ファイルに記述してください。<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題2</p>
    <p>
      <br>
       下記の情報でデータベースを作成してください。<br>
       【データベース名】 test_db<br>
       【文字コード】 utf8mb4<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題3</p>
    <p>
      <br>
       下記の情報でテーブルを作成してください。<br>
       【テーブル名】 employees<br>
       【カラム】<br>
       id：INT 主キー<br>
       name：VARCHAR(30)<br>
       department：VARCHAR(30)<br>
       start_date：DATE<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題4</p>
    <p>
      <br>
       下記データを作成したテーブルに登録してください。<br>
       【社員情報】<br>
       1, '社員 一郎', '営業部', '2019-01-01'<br>
       2, '社員 二郎', '経理部', '2019-02-01'<br>
       3, '社員 三郎', '営業部', '2019-03-01'<br>
       4, '社員 四郎', '総務部', '2019-04-01'<br>
       5, '社員 五郎', '総務部', '2019-05-01'<br>
       6, '社員 六郎', '営業部', '2019-06-01'<br>
       7, '社員 七郎', '企画部', '2019-07-01'<br>
       8, '社員 八郎', '経理部', '2019-08-01'<br>
       9, '社員 九郎', '広報部', '2019-09-01'<br>
       10, '社員 十郎', '企画部', '2019-10-01'<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題5</p>
    <p>
      <br>
       下記の条件に当てはまる社員情報を取得してください。SQL文を解答ファイルに記述してください。<br>
       【取得条件】<br>
       社員ID(id)が1の社員を検索、カラムの社員名(name)と入社日(start_date)だけを表示<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題6</p>
    <p>
      <br>
       下記の条件に当てはまる社員情報を取得してください。SQL文を解答ファイルに記述してください。<br>
       【取得条件】<br>
       社員ID(id)が4、部署(department)が総務部の社員を検索<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題7</p>
    <p>
      <br>
       下記の条件に当てはまる社員情報を取得してください。SQL文を解答ファイルに記述してください。<br>
       【取得条件】<br>
       社員ID(id)が10か、部署(department)が営業部の社員を検索<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題8</p>
    <p>
      <br>
       下記の条件に当てはまる社員情報を更新してください。SQL文を解答ファイルに記述してください。<br>
       【更新条件】<br>
       社員ID(id)1の社員が総務部（department）に異動した場合の更新<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題9</p>
    <p>
      <br>
       下記の条件に当てはまる社員情報を削除してください。SQL文を解答ファイルに記述してください。<br>
       【削除条件】<br>
       社員ID(id)10の社員が退職した場合のデータ削除<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題10</p>
    <p>
      <br>
       「mysqldump」コマンドを使って、データベース情報をエクスポートしてください。エクスポートするファイル名は「test_db.sql」とします。<br>
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