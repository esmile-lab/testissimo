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
                占い結果を表示する為に、巫女さんの吹き出し部分の表示を切り替えていきます。<br>
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 表示部分の切替え</h4>
            <div>
                今回作成する機能です。<br>
                <br>
                <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_6/img3.png');?>" alt="img3" style="width:60%;"><br>
                <br>
                名前入力のチェックが正常に通ったら、次は占い結果エリアの表示切替えをします。<br>
                index.htmlのソースから、初期表示と結果表示のタグ情報を取得し、初期表示のテキストを非表示にし、占い結果のテキストが表示されるようにします。<br>
                ここでは占い結果の抽選処理がまだ終わっていないので、単純に結果用テキストに切り替える事が目標です。<br>
                <br>
                １．初期表示のテキスト、占い結果のテキスト両方のエレメントDOMからCSSを変更<br>
                <br>
                例）id「sample_id」タグのCSSを操作する例文
<pre class="prettyprint lang-js">
document.getElementById('sample_id').style.プロパティ = 変更値；
</pre>
                <br>
                エレメントの表示／非表示をどのプロパティから操作すれば良いかわからなければ、教材内にあるstyle.cssを参考にしましょう。
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>