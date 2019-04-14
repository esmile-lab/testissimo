<style>
    .bcolor {
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

    <div class="box-child__content bcolor">
        <h4><span>概要1.</span> 学習POINT</h4>
        <p>
            おみくじ占いをWebアプリケーションとして制作していきます。<br>
            <br>
            教材として用意されているおみくじ占いのアプリ画面にJavaScriptで機能を追加し、アプリケーションを完成させます。<br>
            ここでは、入力値の取得、乱数による占い結果の表示などがJavaScriptのスキルとして求められます。<br>
            <br>
            <br>
            <b class="error-message">課題用の教材に今回使用するファイルが用意されていますので、ダウンロードして課題に取り組んでください。</b><br>
            <br>
            <b>【教材ファイル】omikuji_create</b><br>
            / <b class="error-message">index.html</b>・・・・・・・アプリ表示ファイル ※JavaScriptの記述方法によってはこのファイルにも記述する必要があります。<br>
            / css / reset.css・・・・・ブラウザ間の違いを吸収する為のcssファイル。変更の必要なし。<br>
            / css / style.css・・・・・表示ファイルのデザインを記述する為のcssファイル。変更の必要なし。<br>
            / img / jinja_miko.png ・・アプリに登場する巫女さん画像。変更の必要なし。<br>
            / js / <b class="error-message">app.js</b> ・・・・・・・JavaScriptを記述する為のファイル。このファイルに処理を記述します。占い結果の一覧がオブジェクトで書かれていますので、結果表示をする時はこのオブジェクトを使用してください。<br>
            <br>
            ダウンロード後、「index.html」をブラウザで開くと今回課題のおみくじアプリが表示されます。
        </p>
    </div>

    <div class="box-child__content bcolor">
        <h4><span>概要2.</span> アプリケーション仕様</h4>
        <p>
            <img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_6/img1.png');?>" alt="img1" style="width:60%;"><br>
            <br>
            名前を入力し、「占う」ボタンを押すと、占い（おみくじ）結果が表示されるおみくじWebアプリケーションを作成します。<br>
            下は今回制作するおみくじアプリの機能について説明しています。この情報を参考にしながらjsで処理を記述し、Webアプリケーションを完成させていきます。<br>
            <br>
            <b>【名前入力ボックス】</b><br>
            　名前を入力する為のテキストボックスです。<br>
            　占い結果を表示する時に入力された名前を使用します。<br>
            　名前が入力されていない時は、占い結果を表示しません。<br>
            <br>
            <b>【占い結果エリア】</b><br>
            　占い結果を表示するエリアです。<br>
            　「占う」ボタンが押されたら、このエリアに占い結果を表示します。<br>
            <br>
            <b>【占いボタン】</b><br>
            　占い結果を表示する為の実行ボタンです。<br>
            <br>
            <b>【占い結果の確率】</b><br>
            　以下の確率で占い結果が表示されるように処理を作成してください。<br>
            <br>
            「大吉」・・・5%<br>
            「吉」・・・・15%<br>
            「中吉」・・・40%<br>
            「小吉」・・・30%<br>
            「凶」・・・・8%<br>
            「大凶」・・・2%<br>
            <br>
            <b>【占い結果画面例】</b><br>
            <img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_6/img2.png');?>" alt="img1" style="width:60%;"><br>
        </p>
    </div>
    
    <div class="box-child__content bcolor">
        <h4><span>概要3.</span> 提出ファイルについて</h4>
        <p>
            学習が終わった場合、もしくは途中評価をしてほしい場合は、学習コンテンツ一覧画面の学習した課題のアップロードボタンからファイルを提出してください。<br>
            <br>
            【ファイル名　】 L2_omikuji_ユーザー名<br>
            【ファイル形式】 zip<br>
            【ファイル内容】 ダウンロードした教材ファイルを全て含めてzipに圧縮してください。
        </p>
    </div>

</div>