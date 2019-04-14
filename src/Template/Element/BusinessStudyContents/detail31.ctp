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
                投稿記事の一覧表示部分を作成します。<br>
                <br>
                ここではDBからデータの抽出、並べ替えを行い、画面に一覧表示させる部分を作成していきます。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 投稿記事データの抽出</h4>
            <div>
                <div>
                    今回作成する機能です。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_9/img2.png');?>" alt="img1" style="width:60%;">
                </div>
                <br>
                <br>
                <p>
                    まずは、一覧を表示しているタグより前にDBから一覧を取得するSQL文を実行します。<br>
                    <br>
                    一覧表示の条件は、全データを投稿日時の新しい日付順に表示するという仕様なので、まずはSELECTを使用して全件を取得するSQL文を作成します。<br>
                    SELECT文の書き方がわからない人は、DB基礎学習編をもう一度学習してみましょう。<br>
                    <br>
                    全件取得のSQL文を作ったら、ORDERBY句を使って投稿日時の降順（新しい日付順）に並べ替える記述を追加します。
                </p>
<pre class="prettyprint lang-sql">
// カラムには並び替え時のキーとなるカラムを指定します。
// 昇順をASC、降順をDESCで指定します。指定が無ければASCとなります。
mysql> [SELECT文] ORDER BY [カラム] ASC or DESC;
</pre>
                <p>
                    SELECT用のSQL文が完成したら、次は完成したSQLを実行してみましょう。<br>
                    <br>
                </p>
<pre class="prettyprint">
$result = $dbCon->query(SELECT用のSQL文);   // 作成したSQL文を引数に入れて実行します。
</pre>
                <p>
                    $resultにSQLの結果が格納されているので、画面表示の時に使用します。<br>
                </p>
            </div>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> 投稿記事データの画面表示</h4>
            <div>
                <p>
                    DBからデータを取得できたので、次はデータを画面に表示させます。<br>
                    <br>
                     記事削除用のフォームが予め用意されているので、このform部分を取得した件数分while文を使ってループ処理をしていきます。<br>
                </p>
<pre class="prettyprint">
// fetch_assoc()は、結果の行を連想配列で取得します。
// キー値はDBのカラム名になります。
while ($row = $result->fetch_assoc()) {
     削除用のformタグを含めたhtmlタグを件数分作成
}
</pre>
                <br>
                <p>
                    以上で一覧表示部分は完成です。<br>
                    さらに、投稿記事データが1件も無かった時は「登録されている記事がありません」などを表示してあげると、ユーザーに対してより親切なシステムになります。<br>
                    余力があれば対応しておきましょう。
                </p>
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>