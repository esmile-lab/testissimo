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
                「名前」が入力されているかの制御部分をJavaScriptで作成します。<br>
                <br>
                ここからはStudy1で取得したイベントに対して処理を追加していきます。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 入力値チェック</h4>
            <div>
                今回作成する機能です。<br>
                <br>
                <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_6/img2.png');?>" alt="img2" style="width:60%;"><br>
                <br>
                「占う」ボタンのクリックイベントが取得できるようになったら、次はアプリケーション仕様に沿って正しく動作するかの処理を加えていきます。<br>
                <br>
                １．名前は必須入力<br>
                　名前入力ボックスに値があるかどうかを判定し、なければダイアログ「名前を入力してください」を表示し、処理を止める<br>
                <br>
                ユーザーに名前を入力してもらわないと、占い結果が正常に表示されなくなってしまうので、それ以降の処理を終了し、ダイアログで入力を促すようにしましょう。
            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>