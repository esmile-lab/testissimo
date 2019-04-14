<style>
.bcolor, .box-child__content {
    margin-bottom:40px;
}
.bcolor h4 {
    border-left: 5px solid #ef6ebf;
}
.bcolor h4 span {
    color: #ef6ebf;
}
@media only screen and (max-width: 767px) {
    .box-child__content img {
        width:100% !important;
    }
}
</style>

<div>
    <div class="tabs">
        <input id="study" type="radio" name="tab_item" checked>
        <label class="tab_item" for="study">学習用</label>
        <input id="answer" type="radio" name="tab_item">
        <label class="tab_item" for="answer">解説用</label>
        <!-- 学習用 -->
        <div class="tab_content" id="study_content">

            <div class="box-child__content bcolor">
                <h4><span>概要1.</span> 学習POINT</h4>
                <p>
                    XAMPPパッケージをダウンロードし、PCにインストールしていきます。<br>
                    <br>
                    基本的にはガイダンスに従って進めていけば問題無くインストールできるようになっています。<br>
                    途中でインストールするソフトウェアを選択する箇所がでてきますが、ほとんどのソフトウェアがWebアプリケーションを制作するのに必要なものなので、全てをインストールするようにしましょう。
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題1.</span> XAMPPダウンロード</h4>
                <p>
                    公式サイトからあなたが使用しているPCのOS環境を選択し、パッケージのダウンロードをしてください。<br>
                    <br>
                    公式サイト：<a href="https://www.apachefriends.org/jp/index.html" target="_blank">https://www.apachefriends.org/jp/index.html</a>
                </p>
            </div>

            <div class="box-child__content">
                <h4><span>課題2.</span> XAMPPインストール</h4>
                <p>
                    ダウンロードしたパッケージから、XAMPPのインストールをしてください。
                </p>
            </div>

        </div>

        <!-- 解説用 -->
        <div class="tab_content" id="answer_content">

            <div class="box-child__content">
                <h4><span>課題1.</span> XAMPPダウンロード</h4>
                <p>
                    <b class="error-message">【解説】</b>
                </p>
                <p><b>POINT 1．パッケージのダウンロード</b><br></p>
                <p>
                    まずは、公式サイトからパッケージをダウンロードします。<br>
                    下がダウンロードの画面になります。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img1.png');?>" alt="img1" style="width:60%;"><br>
                    <br>
                    3種類のOS環境を選択する事ができます。<br>
                    インストールするPCがWindowsの人は一番左をクリック、Macの人は一番右をクリックしてください。<br>
                    真ん中はLinux環境になっていますが、そもそもLinux環境をある程度操作できる人はXAMPPパッケージをインストールしなくても、一から自分で開発環境を構築する事ができるはずなので、このパッケージ自体使用する機会は少ないかもしれません。<br>
                    <br>
                    解説では、使用ユーザーが一番多いWindows環境での構築を説明していきたいと思います。<br>
                    クリックするとパッケージファイルがダウンロードされます。<br>
                    現在の最新バージョンは7.3.1となっていて、「xampp-win32-7.3.1-0-VC15-installer.exe」このバージョンがダウンロードされます。
                </p>
            </div>

            <div class="box-child__content bcolor">
                <h4><span>課題2.</span> XAMPPインストール</h4>
                <p>
                    <b class="error-message">【解説】</b>
                </p>
                <p><b>POINT 1．XAMPPのインストール</b><br></p>
                <p>
                    課題1でダウンロードしたexeファイルをダブルクリックで実行します。<br>
                    <br>
                    インストールするPCにセキュリティソフトが入っている場合は、下記画面が表示されますので、「Yes」をクリックして次に進んでください。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img2.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    セットアップウィザードが開始されます。<br>
                    この画面から手順に沿ってインストールを進めていきます。「Next」をクリックして次に進んでください。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img3.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    インストールするソフトウェアを選択します。<br>
                    Webサーバーとして起動する「Apache」、データベースとして使用する「MySQL」、プログラミング言語である「PHP」「Perl」などは含めておきましょう。<br>
                    PHPで動作するデータベース管理ツール「phpMyAdmin」も含めておくと、データベースの操作が簡単にできるようになります。<br>
                    特に指定がなければ、全ての項目にチェックを入れた状態で「Next」をクリックして次に進んでください。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img4.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    インストールするフォルダの選択です。<br>
                    インストール先はデフォルト（C:\xampp）のままで、「Next」をクリックして次に進んでください。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img5.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    アプリケーションの提供元であるBitNamiについての説明になります。<br>
                    チェックをつけるとXAMPPの紹介ページにとびますが、特に確認する必要がなければチェックは外して「Next」をクリックして次に進んでください。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img6.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    インストール前の最終確認画面です。「Next」をクリックするとインストールが始まります。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img7.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    インストール中の画面になります。<br>
                    ゲージが右側までいっぱいになるとインストールは完了です。インストールされるまでに5分～10分ほどかかります。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img8.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    インストール完了画面です。<br>
                    チェックを入れた状態で「Finish」をクリックすると、XAMPPのコントロール画面が起動します。<br>
                    <br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_4/img9.png');?>" alt="img1" style="width:40%;"><br>
                    <br>
                    <br>
                    <br>
                    以上でXAMPPのインストールに成功しました。
                </p>
            </div>

        </div>
    </div>
</div>