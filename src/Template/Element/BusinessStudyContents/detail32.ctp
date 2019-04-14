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
                投稿記事の削除処理を作成します。<br>
                <br>
                ここでは一覧に表示されている投稿記事から該当行を削除する部分を作成していきます。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 削除処理のPOST送信</h4>
            <div>
                <div>
                    今回作成する機能です。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_9/img3.png');?>" alt="img1" style="width:60%;">
                </div>
                <br>
                <br>
                <p>
                    まずは、index.phpに記述されている削除用フォーム部分のhtmlタグを確認してみましょう。<br>
                    ※タグの内容はダウンロード時の状態になります。
                </p>
<pre class="prettyprint">
&lt;!-- 記事削除用のフォーム  --&gt;
&lt;form class="delete_form" name="deleteForm" method="post" action="index.php"&gt;
    &lt;div class="child-table__row"&gt;
        &lt;p&gt;投稿記事を表示&lt;/p&gt;
        &lt;p&gt;投稿日時を表示&lt;/p&gt;
        &lt;p&gt;
            &lt;button type="submit" name="action" value="delete" class="child-table__btn btn--delete"&gt;削除&lt;/button&gt;
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;!-- value属性にDBから取得した投稿記事IDを入れます。 --&gt;
    &lt;input type="hidden" name="board_id" value="" /&gt;
&lt;/form&gt;
</pre>
                <p>
                    「削除」ボタンを押すと、form内の情報がsubmitされるようになっています。<br>
                    削除用フォームから必ず送信しなければならないデータは、データを削除する為のキーとなる投稿記事ID(カラム名：id)です。<br>
                    このデータは画面を表示する時にデータを持たせておく必要があります。<br>
                    登録処理と同様に「削除」ボタンからはPOSTデータが削除処理かどうかを判断する事ができます。<br>
                    <br>
                    まずは、POSTデータが削除かどうか判断する所を作りましょう。<br>
                </p>
            </div>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> DBの削除</h4>
            <div>
                <div>
                    POST送信データが削除処理かどうか判定する部分ができたので、次に処理部分を作成します。<br>
                    <br>
                    まずは、今回削除する為のDELETE文を作成していきます。<br>
                    DELETE文の書き方がわからない人は、DB基礎学習編をもう一度学習してみましょう。<br>
                    <br>
                    削除時に必要な値は、POST送信された投稿記事ID(カラム名：id)です。このidをキーにどのデータを削除するのか特定します。<br>
                    DELETE用のSQL文が完成したら、次は完成したSQLを実行してみましょう。<br>
                    <br>
                </div>
<pre class="prettyprint">
$result = $dbCon->query(DELETE用のSQL文);   // 作成したSQL文を引数に入れて実行します。
</pre>
                <p>
                    $resultにはSQLの結果が格納されているので、実行後は$resultの値を見て、エラーかどうかを判断する処理も追加しておきましょう。<br>
                </p>
                <br>
                <p>
                    削除が完了したらもう一度リダイレクトします。（データはすでにありませんが、更新による二重処理防止の為）<br>
                    PHPでのリダイレクト方法は、新規登録時にも説明してあるので省きます。
                </p>
                <p>
                    以上で削除部分は完成です。<br>
                    <br>
                    以上の学習で、掲示板サイトが完成しました。<br>
                    <br>
                    今回の課題で同期通信処理やDBの基本的な操作を学ぶ事ができたと思います。<br>
                    今はJavaScriptを使用したAjax通信が主流になっているので、今後は非同期通信でのシステム制作を学習していきましょう。
                </p>
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>