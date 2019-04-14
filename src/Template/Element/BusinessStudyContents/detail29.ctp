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
                掲示板サイトで使用するDBを作成し、PHPから接続の確認をします。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> DB作成</h4>
            <div>
                <p><b>１．MySQLコンソールからDBを作成してください。</b></p>
                <p>
                    【データベース名】 test_db<br>
                    【文字コード】 utf8mb4<br>
                    <br>
                    DB作成のSQL文は、基礎学習でも説明してある為、ここでの説明は省きます。<br>
                    作成方法がわからない人は基礎学習を復習しましょう。
                </p>
                <br>
                <p><b>２．MySQLコンソールからテーブルを作成してください。</b></p>
                <p>
                    【テーブル名】 board<br>
                    【カラム】<br>
                    id　　　：INT　auto_increment(主キー)<br>
                    detail　：TEXT<br>
                    start_at：TIMESTAMP<br>
                    <br>
                    DB作成同様に、テーブル作成のSQL分は基礎学習でも説明してある為、ここでの説明は省きます。<br>
                    作成方法がわからない人は基礎学習を復習しましょう。
                </p>
            </div>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> DB接続</h4>
            <div>
                <p>
                    PHPからMySQL接続するには、PHPのDB接続用パッケージが必要です。<br>
                    基本的にはPHPをインストールする時に開発に必要なパッケージをインストールするのですが、まだインストールしていない人はパッケージをインストールしましょう。<br>
                    ※PHPをインストールしているOSによってインストール方法が異なる為、注意してください。<br>
                    <br>
                    PHPからMySQLへ接続する為には、「mysqli」、「PDO」というパッケージがあります。<br>
                    mysqliはMySQL専用の接続パッケージですが、PDOは、パッケージ側でRDBMSの違い吸収してくれる為、MySQL以外にも使用する事ができます。<br>
                    PHPを学習していくのであれば、PDOの習得は必須ですが、今回は、DB接続の学習も含めているので、わかりやすいmysqliを使用していきましょう。<br>
                </p>
                <p>
                    例） mysqliの接続確認（sample.php）<br>
                </p>
<pre class="prettyprint lang-php">
// ローカル環境で実装している場合、DBサーバー名には「localhost、または127.0.0.1」を指定します。
$dbCon = new mysqli("DBサーバー名（localhost）", "ユーザー名", "パスワード", "データベース名");
// 日本語記事の文字化け対応の為、utf-8を指定します。
$dbCon->set_charset('utf8');
    
// DB接続確認をします。接続に失敗したらエラーを出力し、終了します。
if ($dbCon->connect_error) {
    exit('データベースの接続に失敗しました。');
} else {
    exit('データベースの接続に成功しました。');
}
</pre>
                <p>
                    mysqliの接続には「手続き型」と「オブジェクト型」の2つの方法がありますが、今回はオブジェクト型で接続しています。<br>
                    正常に接続ができれば、DBの操作が可能になります。<br>
                </p>
                <br>
                <p>
                    PHPでは、処理終了時に自動的にDB接続が閉じられます。<br>
                    closeの記述をしなくても基本的な処理であれば問題ないのですが、基本を理解する上で重要なので、学習も含め接続を切っておきましょう。
                </p>
<pre class="prettyprint lang-php">
// DBの取得が終わったら、データベースの接続を終了します。
$dbCon->close();
</pre>
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>