<style>
    .tabs .box-child__content {
        margin-bottom:40px;
    }
    .bcolor h4 {
        border-left: 5px solid #ef6ebf;
    }
    .bcolor h4 span {
        color: #ef6ebf;
    }
</style>

<div>
    <div class="tabs">
        <input id="study" type="radio" name="tab_item" checked>
        <label class="tab_item" for="study">学習用</label>
        <input id="answer" type="radio" name="tab_item">
        <label class="tab_item" for="answer">解説用</label>
        <!-- 学習用 -->
        <div class="tab_content" id="study_content">

            <div class="box-child__content">
                <h4><span>課題1.</span> データベースの作成</h4>
                <p>
                    下記の情報でデータベースを作成してください。<br>
                    <br>
                    【データベース名】 test_db<br>
                    【文字コード】 utf8mb4
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題2.</span> テーブルの作成</h4>
                <p>
                    下記の情報でテーブルを作成してください。<br>
                    <br>
                    【テーブル名】 employees<br>
                    【カラム】<br>
                    id：INT 主キー<br>
                    name：VARCHAR(30)<br>
                    department：VARCHAR(30)<br>
                    start_date：DATE
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題3.</span> データの登録</h4>
                <p>
                    下記データを作成したテーブルに登録してください。<br>
                    <br>
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
                    10, '社員 十郎', '企画部', '2019-10-01'
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題4.</span> データの検索（全件）</h4>
                <p>
                    下記の条件に当てはまる社員情報を取得してください。<br>
                    <br>
                    【取得条件】<br>
                    全社員の情報、全てのカラムを表示
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題5.</span> データの検索（WHERE）</h4>
                <p>
                    下記の条件に当てはまる社員情報を取得してください。<br>
                    <br>
                    【取得条件】<br>
                    社員ID(id)が1の社員を検索、カラムは社員名(name)と入社日(start_date)だけを表示
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題6.</span> データの検索（WHERE、AND）</h4>
                <p>
                    下記の条件に当てはまる社員情報を取得してください。<br>
                    <br>
                    【取得条件】<br>
                    社員ID(id)が4、部署(department)が総務部の社員を検索、全てのカラムを表示
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題7.</span> データの検索（WHERE、OR）</h4>
                <p>
                    下記の条件に当てはまる社員情報を取得してください。<br>
                    <br>
                    【取得条件】<br>
                    社員ID(id)が10か、部署(department)が営業部の社員を検索、全てのカラムを表示
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題8.</span> データの更新（全件）</h4>
                <p>
                    下記の条件に当てはまる社員情報を更新してください。<br>
                    <br>
                    【更新条件】<br>
                    全社員の入社日(start_date)を2020年1月1日に社員情報を更新
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題9.</span> データの更新（WHERE）</h4>
                <p>
                    下記の条件に当てはまる社員情報を更新してください。<br>
                    <br>
                    【更新条件】<br>
                    社員ID(id)1の社員が総務部（department）へ異動した時に社員情報を更新
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題10.</span> データの削除（WHERE）</h4>
                <p>
                    下記の条件に当てはまる社員情報を削除してください。<br>
                    <br>
                    【削除条件】<br>
                    社員ID(id)10の社員が退職した時に社員情報を削除
                </p>
            </div>

        </div>

        <!-- 解説用 -->
        <div class="tab_content" id="answer_content">

            <div class="box-child__content">
                <h4><span>課題1.</span> データベースの作成</h4>
                <p>
                    <b class="error-message">【解説】</b>
                </p>
                <p><b>POINT 1．CREATE DATABASE文</b><br></p>
                <p>
                    データベース「test_db」を作成していきます。<br>
                    ユーザー作成時にデータベースが作成できる権限を与えていない場合は、現状root権限でしかデータベースを作成する事ができないので、ここではrootユーザーでログインします。<br>
                    <br>
                    データベースを作成する為のSQLには、文字コードも設定する事ができます。<br>
                    日本語を扱う文字コードはいくつかありますが、ユニコードでも一番範囲が広く、全てのユニコード文字を使用できる「utf8mb4」を設定します。
                </p>
<pre class="prettyprint">
mysql> CREATE DATABASE test_db CHARSET utf8mb4;
</pre>
                <p>
                    上記コマンドでデータベースを作成する事ができました。次に作成したデータベースを確認してみます。
                </p>
<pre class="prettyprint">
mysql> SHOW DATABASES;
</pre>
                <p>
                    デフォルトで登録されているデータベースがいくつか入っていますが、一覧の中に「test_db」があれば正常にデータベースが作成されています。
                </p>
                <br>
                <p><b>POINT 2．DROP DATABASE文</b></p>
                <p>
                    データベースを削除するSQL文です。
                </p>
<pre class="prettyprint">
mysql> DROP DATABASE [データベース名]
</pre>
                <p>
                    ここでは作成したデータベースの削除はしませんが、「test_db」を削除する場合は下のコマンドを実行します。
                </p>
<pre class="prettyprint">
mysql> DROP DATABASE test_db;
</pre>
            </div>

            <div class="box-child__content">
                <h4><span>課題2.</span> テーブルの作成</h4>
                <p>
                    <b class="error-message">【解説】</b><br>
                    RDBMSでは、データベースという大きな箱の中にカテゴリに分けたテーブルという領域を作る事ができます。<br>
                    テーブルは表で表すとイメージしやすく、列に対するヘッダーが今回作成する社員ID、社員名、部署名、入社日になります。このヘッダーをカラム名と呼び、カラム名には数値や文字列など様々な形式のデータを入れられるように前もって型を定義しておく事ができます。<br>
                    <br>
                </p>
                <p><b>POINT 1．主キーについて</b><br></p>
                <p>
                    主キーとはプライマリーキーと呼ばれ、テーブル内のレコードを識別して、紐付けるための値です。主キーの条件には、「重複しない事」、「シンプルで扱いやすい事」、「値が変わらない事」などが挙げられます。<br>
                    今回は社員IDを主キーに設定していますが、一般的に社員IDは他の社員と重複せず、数値などで管理され、一度割り振られたらIDは変わらない事が多いと思います。<br>
                    複数のテーブルがないとイメージしづらいかもしれませんが、ここでは重複を管理してくれるという事だけでも覚えておいてください。<br>
                    <br>
                <p><b>POINT 2．CREATE TABLE文</b><br></p>
                <p>
                    CREATE TABLE文を実行します。<br>
                    今回はデータを入れず、テーブルの枠組みだけを作成します。<br>
                </p>
<pre class="prettyprint">
mysql> CREATE TABLE employees (
    -> id            INT NOT NULL PRIMARY KEY,
    -> name          VARCHAR(30),
    -> department    VARCHAR(30)
    -> start_date    DATE
    -> );
</pre>
                <p>
                    idカラムの宣言オプションに「NOT NULL」が付いていますが、これはNULL値を許可しないという意味で、idカラムには必ず値が入るという事です。<br>
                    列制約で主キーを設定する場合はこれも記述しなければなりません。<br>
                    <br>
                    上記コマンドでテーブルを作成する事ができました。次に作成したテーブル情報を確認してみます。
                </p>
<pre class="prettyprint">
mysql> DESCRIBE employees;
</pre>
                <br>
                <p><b>POINT 3．DROP TABLE文</b></p>
                <p>テーブルを削除するSQL文になります。</p>
<pre class="prettyprint">
mysql> DROP TABLE [テーブル名]
</pre>
                <p>ここでは作成したテーブルの削除はしませんが、「employees」テーブルを削除する場合は下のコマンドを実行します。</p>
<pre class="prettyprint">
mysql> DROP TABLE employees;
</pre>
             </div>

            <div class="box-child__content">
                <h4><span>課題3.</span> データの登録</h4>
                <p>
                    <b class="error-message">【解説】</b><br>
                    データの登録は、データベースを扱う場合に必ず出てくるSQLの基本操作です。ここでは学習しませんが、大量のデータを取り扱う場合はファイルなどからインポートする方法もあります。<br>
                    <br>
                </p>
                <p><b>POINT 1．INSERT文</b></p>
                <p>
                    データを登録するSQL文を実行します。先に登録するカラム名を指定し、「VALUES」の後から登録データを()内に記述します。<br>
                    文字列はシングルクォーテーション、もしくはダブルクォーテーションで囲みます。<br>
                    <br>
                    - 1件のみ登録する場合 -
                </p>
<pre class="prettyprint">
mysql> INSERT INTO employees (id, name, department, start_date) VALUES (1, '社員 一郎',  '営業部', '2019-01-01');
</pre>
                <br>
                <p>
                    - 複数件登録する場合 -<br>
                    登録データ1件ずつ「,」で区切って追加していきます。
                </p>
<pre class="prettyprint">
mysql> INSERT INTO employees (id, name, department, start_date)
    -> VALUES (2, '社員 二郎', '経理部', '2019-02-01'),
    -> (3, '社員 三郎', '営業部', '2019-03-01'),
    -> (4, '社員 四郎', '総務部', '2019-04-01'),
    -> (5, '社員 五郎', '総務部', '2019-05-01'),
    -> (6, '社員 六郎', '営業部', '2019-06-01'),
    -> (7, '社員 七郎', '企画部', '2019-07-01'),
    -> (8, '社員 八郎', '経理部', '2019-08-01'),
    -> (9, '社員 九郎', '広報部', '2019-09-01'),
    -> (10, '社員 十郎', '企画部', '2019-10-01');
</pre>
            </div>

            <div class="box-child__content">
                <h4><span>課題4.</span> データの検索（全件）</h4>
                <p>
                    <b class="error-message">【解説】</b><br>
                    データの取得は、データベースを扱う場合に必ず出てくるSQLの基本操作ですが、シンプルなSQL文から様々な抽出条件を組み合わせた複雑なSQL文まで、学習の範囲がとても広い分野です。<br>
                    ここでは学習しませんが、抽出データのソート、グループ分けやテーブル同士を結合してからデータを抽出するなどと言った複雑な操作もSQL文によって実現できます。
                </p>
                <br>
                <p><b>POINT 1．WHERE句</b></p>
                <p>
                    データを取り出す時は、全件取得を除いてどのレコードを抽出するかを指定しなければいけません。<br>
                    その条件を「WHERE」を使って指定します。<br>
                    条件には、「=」、「!=」などの比較演算子や「AND」、「OR」の論理演算子で複数指定する事もできます。
                </p>
                <br>
                <p><b>POINT 2．SELECT文</b></p>
                <p>
                    データを検索するSQL文を実行します。どのデータを抽出するか、「WHERE」を使って指定します。全件取り出す場合は「WHERE」を省いて記述します。<br>
                    文字列はシングルクォーテーション、もしくはダブルクォーテーションで囲みます。<br>
                    どのカラムの値を取り出すか指定しなければならないのですが、「*」を指定する事でテーブルに定義されているカラムの全項目を抽出する事ができます。
                </p>
                <p>- 全社員の情報、全てのカラムを表示 -</p>
<pre class="prettyprint">
mysql> SELECT * FROM employees;
</pre>
            </div>

            <div class="box-child__content">
                <h4><span>課題5.</span> データの検索（WHERE）</h4>
                <p>- 社員ID(id)が1の社員を検索、カラムは社員名(name)と入社日(start_date)だけを表示 -</p>
<pre class="prettyprint">
mysql> SELECT name, start_date FROM employees WHERE id = 1;
</pre>
            </div>

            <div class="box-child__content">
                <h4><span>課題6.</span> データの検索（WHERE、AND）</h4>
                <p>- 社員ID(id)が4、部署(department)が総務部の社員を検索、全てのカラムを表示 -</p>
<pre class="prettyprint">
mysql> SELECT * FROM employees WHERE id = 4 AND department = '総務部';
</pre>
            </div>

            <div class="box-child__content">
                <h4><span>課題7.</span> データの検索（WHERE、OR）</h4>
                <p>- 社員ID(id)が10か、部署(department)が営業部の社員を検索、全てのカラムを表示 -</p>
<pre class="prettyprint">
mysql> SELECT * FROM employees WHERE id = 10 OR department = '営業部';
</pre>
            </div>

            <div class="box-child__content">
                <h4><span>課題8.</span> データの更新（全件）</h4>
                <p>
                    <b class="error-message">【解説】</b><br>
                    データの更新もデータベースを扱う場合に必ず出てくるSQLの基本操作です。<br>
                    登録と違って更新は、全件を対象とする場合を除いてどのレコードに対して操作するのかを明確にしなければなりません。その条件を「WHERE」を使って指定します。
                </p>
                <br>
                <p><b>POINT 1．UPDATE文</b></p>
                <p>
                    データを更新するSQL文を実行します。どのデータを更新するか「WHERE」を使って指定します。<br>
                    全件更新する場合は「WHERE」を省いて記述します。<br>
                    文字列はシングルクォーテーション、もしくはダブルクォーテーションで囲みます。<br>
                </p>
                <p>- 全社員の入社日(start_date)を2020年1月1日に社員情報を更新 -</p>
<pre class="prettyprint">
mysql> UPDATE employees SET start_date = ‘2020-01-01’;
</pre>
                <p>上記のSQL文によってデータが正常に更新されているか、SELECT文で確認してみてください。</p>
            </div>

            <div class="box-child__content">
                <h4><span>課題9.</span> データの更新（WHERE）</h4>
                <p>- 社員ID(id)1の社員が総務部（department）へ異動した時に社員情報を更新 -</p>
<pre class="prettyprint">
mysql> UPDATE employees SET department = '総務部' WHERE id = 1;
</pre>
                <p>上記のSQL文によってデータが正常に更新されているか、SELECT文で確認してみてください。</p>
            </div>

            <div class="box-child__content">
                <h4><span>課題10.</span> データの削除（WHERE）</h4>
                <p>
                    <b class="error-message">【解説】</b><br>
                    データの削除もデータベースを扱う場合に必ず出てくるSQLの基本操作です。<br>
                    更新と同様に、全件を対象とする場合を除いてどのレコードに対して操作するのかを明確にしなければなりません。その条件を「WHERE」を使って指定します。
                </p>
                <br>
                <p><b>POINT 1．DELETE文</b></p>
                <p>
                    データを削除するSQL文を実行します。どのデータを削除するか「WHERE」を使って指定します。<br>
                    全件削除する場合は「WHERE」を省いて記述します。文字列はシングルクォーテーション、もしくはダブルクォーテーションで囲みます。
                </p>
                <p>- 社員ID(id)10の社員が退職した時に社員情報を削除 -</p>
<pre class="prettyprint">
mysql> DELETE FROM employees WHERE id = 10;
</pre>
                <p>上記のSQL文によってデータが正常に更新されているか、SELECT文で確認してみてください。</p>
            </div>

        </div>
    </div>
</div>