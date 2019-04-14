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
                占いの抽選を行い、結果を表示します。<br>
                <br>
                確率の求め方や乱数を生成する方法など、新しく学ぶ所が多くなっています。<br>
                やや難易度が高く感じるかもしれませんが、サンプルを参考に学習を進めていきましょう。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 表示部分のDOM操作</h4>
            <div>
                今回作成する機能です。<br>
                <br>
                <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_6/img5.png');?>" alt="img3" style="width:60%;"><br>
                <br>
                Study4の名前表示部分と同様に、index.htmlのソースから占い結果テキストを表示する為のタグを探し、タグに対してDOM操作ができるようにしておきましょう。<br>
                占い結果の抽選処理ができたら、結果エリアの表示部分に値を入れます。<br>
                <br>
            </div>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> 乱数の生成</h4>
            <div>
                今回は6つの占い結果（app.jsに記述されているオブジェクトomikujiWords）に対して、１つ１つ確率が指定してあります。<br>
                ここでは、1～100までのMathオブジェクトを使って、乱数を生成していきます。<br>
                <br>
                Mathオブジェクトとは、数値計算をする時に便利なメソッド（関数）がたくさん用意されているオブジェクトです。<br>
                Mathオブジェクトは、JavaScriptが予め用意しているオブジェクトで（これを組み込み関数と言います）ライブラリなどをインクルードする必要なく使用する事ができます。<br>
                <br>
                今回は、この二つの関数を使用して、1～100までの乱数を作ってみましょう。
<pre class="prettyprint lang-js">
Math.random();        // 0～1の範囲で乱数を生成します。乱数の範囲に0は含まれ、1は含まれないので注意してください。
Math.floor(数値);     // 小数点以下を切り捨ててくれる関数です。
</pre>
                説明の通り、乱数を生成する時に若干の加工が必要です。1～100までの乱数を作成してみてください。
            </div>
        </div>

        <div class="box-child__content">
            <h4><span>課題3.</span> 抽選の作成</h4>
            <div>
                概要にも書いてありますが、今回の抽選確率は以下になっています。<br>
                「大吉」・・・5%<br>
                「吉」・・・・15%<br>
                「中吉」・・・40%<br>
                「小吉」・・・30%<br>
                「凶」・・・・8%<br>
                「大凶」・・・2%<br>
                <br>
                課題2で作成した乱数をキーに確率部分を作成してください。<br>
                <br>
                いくつか書き方がありますが、「大凶」を例に確率部分の処理を書いてみましょう。<br>
                <br>
                例） 「大凶」の確率を割り出す一例
<pre class="prettyprint lang-js">
var rand = 1～100までの乱数
if (rand < 98) { 処理 }    // これで2%の確率で大凶が出ます
</pre>
                <br>
                確率部分が作成できたら、占い結果が格納されているオブジェクトomikujiWordsからテキストを表示部分に入れてあげる処理も必要です。<br>
                配列やオブジェクトの概念、操作方法は、プログラミングを学ぶ上で非常に重要な箇所なので、学習しておきましょう。
            </div>
        </div>
        
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>