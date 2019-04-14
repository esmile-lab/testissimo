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
            記事の投稿と削除ができる簡易的な掲示板サイトを制作していきます。<br>
            <br>
            教材として用意されている掲示板の画面にPHPで機能を追加し、アプリケーションを完成させます。<br>
            ここでは、PHPからDB接続／操作、Webシステムの基本となる画面遷移の処理などがスキルとして求められます。<br>
            <br>
            ※この学習はWebサーバー、PHP環境、DB環境がないと制作できません。先にPHPの動作環境を構築してから学習を始めてください。<br>
            <br>
            <br>
            <b class="error-message">課題用の教材に今回使用するファイルが用意されていますので、ダウンロードして課題に取り組んでください。</b><br>
            <br>
            <b>【教材ファイル】board_create</b><br>
            / <b class="error-message">index.php</b>・・・・・・・掲示板サイトの表示ファイル。 このファイルに処理を記述します。※場合によってはhtmlタグを修正、追加する必要があります。<br>
            / css / style.css・・・・・表示ファイルのデザインを記述する為のcssファイル。変更の必要なし。<br>
            <br>
            ダウンロード後、「index.php」をブラウザで開くと今回課題の掲示板サイトが表示されます。
        </p>
    </div>

    <div class="box-child__content bcolor">
        <h4><span>概要2.</span> アプリケーション仕様（画面）</h4>
        <p>
            <img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_9/img1.png');?>" alt="img1" style="width:60%;"><br>
            <br>
            下は今回制作する掲示板サイトの機能について説明しています。<br>
            この情報を参考にしながらPHPで処理を記述し、サイトを完成させていきます。<br>
            <br>
            <b>【記事入力エリア】</b><br>
            　投稿する記事を入力する為のテキストエリアです。<br>
            　ここに入力された値が記事の内容として登録されます。<br>
            <br>
            <b>【記事登録ボタン】</b><br>
            　入力された記事をDBに新規登録する為の実行ボタンです。<br>
            　登録後は、下の記事一覧表示エリアに記事が追加されます、<br>
            <br>
            <b>【記事一覧表示エリア】</b><br>
            　DBに登録されている記事を一覧表示するエリアです。<br>
            　投稿日付が新しい順に表示します。<br>
            <br>
            <b>【記事削除ボタン】</b><br>
            　登録されている記事ををDBから削除します。<br>
            　各記事に削除ボタンが付いている為、どの削除ボタンが押されたかを判断する必要があります。<br>
            <br>
            <br>
            <b>【投稿記事一覧画面例】</b><br>
            <img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_9/img2.png');?>" alt="img1" style="width:60%;"><br>
        </p>
    </div>

    <div class="box-child__content bcolor">
        <h4><span>概要3.</span> アプリケーション仕様（DB）</h4>
        <p>掲示板サイトで使用するデータベースです。</p>
        <p>
            【データベース名】 test_db<br>
            【文字コード】 utf8mb4<br>
            <br>
        </p>
            <p>投稿記事を保存しておく為のテーブルです。</p>
        <p>
            【テーブル名】 board<br>
            【カラム】<br>
            id　　　：INT　auto_increment(主キー)<br>
            detail　：TEXT<br>
            start_at：TIMESTAMP<br>
        </p>
        <p>
            ※auto_incrementに設定すると自動的に連番の値が格納されていきます。
        </p>
    </div>

    <div class="box-child__content bcolor">
        <h4><span>概要4.</span> 提出ファイルについて</h4>
        <p>
            学習が終わった場合、もしくは途中評価をしてほしい場合は、学習コンテンツ一覧画面の学習した課題のアップロードボタンからファイルを提出してください。<br>
            <br>
            【ファイル名　】 L2_board_ユーザー名<br>
            【ファイル形式】 zip<br>
            【ファイル内容】 ダウンロードした教材ファイルを全て含めてzipに圧縮してください。
        </p>
    </div>

</div>