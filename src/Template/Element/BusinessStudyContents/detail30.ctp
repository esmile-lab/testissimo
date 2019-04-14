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
                投稿記事の新規登録部分を作成します。<br>
                <br>
                ここでは同期通信の基礎学習を目的の1つとしている為、Ajax（非同期通信）やJavaScriptなど画面側の処理は入れずに処理を完成させていきます。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 登録処理のPOST送信</h4>
            <div>
                <div>
                    今回作成する機能です。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_9/img1.png');?>" alt="img1" style="width:60%;">
                </div>
                <br>
                <br>
                <p>
                    まずは、index.phpに記述されている登録用フォーム部分のhtmlタグを確認してみましょう。<br>
                </p>
<pre class="prettyprint">
&lt;!-- 記事登録用のフォーム --&gt;
&lt;form name="insertForm" method="post" action="index.php"&gt;
    &lt;div class="child-input__row"&gt;
        &lt;div&gt;&lt;textarea name="detail" placeholder="ここに投稿したい記事を書いてください。"&gt;&lt;/textarea&gt;&lt;/div&gt;
        &lt;div&gt;
            &lt;button type="submit" name="action" value="insert" class="child-table__btn btn--insert"&gt;登録&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
                <p>
                    「登録」ボタンを押すと、form内の情報がsubmitされるようになっています。<br>
                    <br>
                    formタグ内にあるmethod属性には、送信形式を指定します。<br>
                    URLの最後にパラメータとしてデータを付けて送信する「GET」も指定できますが、今回指定の「POST」送信は、送信データがユーザーから見えない為、セキュリティ面でも安全性が高くなっています。<br>
                    action属性には、送信先のファイルを指定します。<br>
                    今回は１つのファイルで完結できるように作成する為、index.php(同じファイル)を指定してあります。<br>
                    <br>
                    POST送信されたindex.phpでは、form内の値を取得する事ができます。<br>
                    以下がPOSTデータの取得方法です。<br>
                </p>
<pre class="prettyprint">
$_POST['送信データ名'];   // タグ内のname属性を指定します。
</pre>
                <p>GET送信の場合</p>
<pre class="prettyprint">
$_GET['送信データ名'];   // タグ内のname属性を指定します。
</pre>
                <p>
                    登録用フォーム内から取得できるデータは、記事を入力するテキストエリア、登録用のボタンになります。<br>
                    この2つのデータは新規登録時に使用する重要な情報です。<br>
                    登録用のボタンからは新規登録かどうかを判断し、記事を入力するテキストエリアからはDBに登録する為の記事内容を取得する事ができます。<br>
                    <br>
                    まずは、POSTデータが新規登録かどうか判断する所を作りましょう。
                </p>
            </div>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> DBへの登録</h4>
            <div>
                <div>
                    POST送信データが新規登録かどうか判定する部分ができたので、次に登録処理を作成します。<br>
                    <br>
                    まずは、今回登録する為のINSERT文を作成していきます。<br>
                    INSERT文の書き方がわからない人は、DB基礎学習編をもう一度学習してみましょう。<br>
                    <br>
                    登録時に必要な値は、POST送信された記事データと投稿日時を保存する為の現在時刻の2つになります。<br>
                    INSERT用のSQL文が完成したら、次は完成したSQLを実行してみましょう。<br>
                    <br>
                </div>
<pre class="prettyprint">
$result = $dbCon->query(INSERT用のSQL文);   // 作成したSQL文を引数に入れて実行します。
</pre>
                <p>
                    $resultにはSQLの結果が格納されているので、実行後は$resultの値を見て、エラーかどうかを判断する処理も追加しておきましょう。<br>
                </p>
                <br>
                <p>
                    登録が完了したらもう一度リダイレクトします。（更新による二重処理防止の為）<br>
                    ページへのリダイレクトなどは、JavaScriptを使用できると非常に楽なのですが、今回はPHPのみの力技的な書き方でリダイレクトをします。
                    <br>
                </p>
<pre class="prettyprint">
header('Location: ./index.php');
</pre>
                <p>
                    以上で登録部分は完成です。正常に登録されているか、DBを確認してみましょう。
                </p>
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>