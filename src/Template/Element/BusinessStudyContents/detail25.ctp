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
                占い結果のテキスト内容を作成していきます。<br>
                まずはユーザーが入力した名前を取得し、占い結果に表示させましょう。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 名前の取得／表示</h4>
            <div>
                今回作成する機能です。<br>
                <br>
                <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_6/img4.png');?>" alt="img3" style="width:60%;"><br>
                <br>
                Study３の処理が終わっていれば、今は占い結果のテキストが表示されるようになっていると思います。<br>
                <br>
                index.htmlのソースから名前を表示する為のタグを探し、タグに対してDOM操作ができるようにしておきましょう。<br>
                ユーザーが入力した名前を取得し、結果エリアにある名前を表示する部分に入れます。<br>
                <br>
                これまでに学習している記述方法なので、今までの学習を思い出してコードを書いていきましょう。
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>