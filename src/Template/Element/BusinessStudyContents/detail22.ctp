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
                「占う」ボタンが押された時のイベント取得部分をJavaScriptで作成します。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> イベント取得</h4>
            <div>
                今回作成する機能です。<br>
                <br>
                <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_6/img1.png');?>" alt="img1" style="width:60%;"><br>
                <br>
                「占う」ボタンが押された時のイベントを取得します。<br>
                イベントの取得方法は、いくつかあるのでここでは代表的な取得方法を挙げておきます。<br>
                <br>
                １．HTMLファイル内の数値入力用キーのタグ内にイベントハンドラを追加する<br>
                　クリック時のイベントを取得するので、onclickイベントを追加します。<br>
                　イベントハンドラに共通関数を呼び出す事で、処理の共通化ができ、コードの量や変更箇所も一ヶ所で管理できるようになります。<br>
                <br>
                例）イベントハンドラ（クリック）の記述例文 sample.html<br>
<pre class="prettyprint">
&lt;input type="button" id="sample_id" name="sample_name" value="サンプルボタン" onclick="共通関数();"&gt;&lt;/button&gt;
</pre>
                <br>
                ２．タグの情報を元にイベントリスナーを追加する<br>
                　イベントリスナーはタグ一つ一つに追加する事もできますが、ある程度大きな枠で包括的なリスナーを作成する事もできます。<br>
                　基本的には共通化を意識して、JSファイルにイベントリスナーを記述する事が今後にもつながります。<br>
                <br>
                例）イベントリスナーの記述例文 sample.js<br>
<pre class="prettyprint lang-js">
document.getElementById('sample_id').addEventListener('click', function(e) {
    // 処理
});
</pre>
                <br>
                ボタンのクリックが正常に取得できているか、console.logやalertで確認しておきましょう。
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>