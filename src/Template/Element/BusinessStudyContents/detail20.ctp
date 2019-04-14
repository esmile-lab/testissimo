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
        <!-- 学習用 -->
        <div class="box-child__content bcolor">
            <h4><span>概要1.</span> 学習POINT</h4>
            <p>
                仮想環境のCentOSにMySQLをインストールしていきます。<br>
                <br>
                MySQLは、RDBMS(Relational Database Management System：リレーショナルデータベース管理システム)と呼ばれるRDB専用のソフトウェアです。<br>
                RDBは、1件のデータに文字列や数値、時間など複数の属性値を設定し、表のような形式でデータを保存しておく事ができます。<br>
                MySQLの他にもOracleDBやPostgreSQLなどが一般的なRDBMSとして知られています。<br>
                その中でもMySQLやPostgreSQLは、無償のRDBMSとして多くのシェアがあり、特にMySQLは小規模のアプリケーションや学習用などにも多く利用されています。<br>
                <br>
                RDBでは基本的にSQLという言語を使用し、データの抽出、登録、削除などの操作をします。<br>
                先程挙げたRDBMSも全てSQLで操作をしますが、文法や使用できる関数などに若干の違いがある事だけ覚えておいてください。<br>
                <br>
                MySQLのインストールからログインまで、基本設定を一通り学習していきましょう。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> mariaDBの削除</h4>
            <p>
                <b>１．CentOS7にデフォルトでインストールされているRDBMS、mariaDBを「yum」コマンドを使って削除してください。</b><br>
                <br>
                CentOS 7にはデフォルトでmariaDBというRDBMSがインストールされています。mariaDBは、MySQLとの互換性がある派生製品です。<br>
                操作方法もMySQLとほとんど変わらないのですが、今回はMySQLのインストール手順を学習目的としているので削除していきます。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> MySQLインストール</h4>
            <p>
                <b>１．「yum」コマンドを使って、MySQLをインストールしてください。</b><br>
                <br>
                ここでは、MySQLバージョン5.7をインストールしていきます。<br>
                ※2018年4月にバージョン8.0の正式版がリリースされていますが、まだ本格的に広がっていない為、ここでは安定板を使用します。<br>
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題3.</span> MySQL起動／停止</h4>
            <p>
                <b>１．ターミナルを開き、コマンドからMySQLの起動／停止を実行してください。</b><br>
                <br>
                MySQLの起動と停止は、「systemctl」コマンドを使って操作します。<br>
                root（管理者）権限に切り替えてからコマンドを実行してください。<br>
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題4.</span> MySQLログイン</h4>
            <p>
                <b>１．ターミナルを開き、rootユーザー（管理者）でコマンドからMySQLへログインしてください。</b><br>
                <br>
                初回ログイン時はrootユーザーしか作成されていないので、rootユーザーでログインします。<br>
                rootでログインする為の初期パスワードが下のログファイルに出力されています。<br>
                ログファイル場所：/var/log/mysqld.log<br>
                <br>
                以下のキーワードを「grep」コマンドを使って、パスワードの記述場所を見つけます。<br>
                # grep 'temporary password' /var/log/mysqld.log<br>
                <br>
                出力されたパスワードを使用して、MySQLにログインしてください。<br>
                <br>
                <b>２．MySQLへログインできたら、ログイン後の画面をスクリーンショットで保存してください。</b><br>
                <br>
                概要に載せてある画像例を参考に、ログイン画面のスクリーンショットを保存します。<br>
            </p>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>