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
                仮想環境のCentOSにWebサーバーをインストールしていきます。<br>
                <br>
                一度は目にした事があるワードだと思いますが、WWW（World Wide Web）はHTMLと呼ばれる文書を、Webブラウザ（Google ChromeやFirefoxなど）というソフトウェアを使って閲覧する為の仕組みです。このWebページを提供する働きをするのが、Webサーバーになります。<br>
                今回インストールするApacheは、Webサーバーソフトの中で最も有名で、全世界の約50%（W3Techsデータ）のシェアを占めています。みなさんが良く見ているネットの情報も、大半はApacheによってデータが提供されているという事になります。<br>
                <br>
                Apacheは、サーバー用途としてよく利用されるLinux CentOSにも簡単にインストールする事ができます。基本設定の方法とネットワークの知識があれば、社内で使用するサーバーの構築などもできるようになりますし、セキュリティ面での対応もできるようになれば、自分が作ったWebページを世界中の人達に見てもらう事もできるようになります。<br>
                <br>
                Apacheの基本設定方法を学び、Webサーバーの構築から稼働までの基本的な操作の習得を目指しましょう。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> Apacheインストール</h4>
            <p>
                <b>１．「yum」コマンドを使って、Apacheをインストールしてください。</b><br>
                <br>
                Apacheのパッケージ名はhttpdになります。<br>
                「yum」コマンドを使用する事で、httpdのインストール、更新、削除を簡単に行う事ができます。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> Apache基本設定</h4>
            <p>
                <b>１．Apacheの設定ファイルであるhttpd.confにどのような設定が記述してあるか、確認してください。</b><br>
                <br>
                Apacheの設定は、”/etc/httpd/conf/”下にあるhttpd.confファイルで行います。<br>
                セキュリティに関する設定など、Apacheに関する全ての設定がこのファイルで管理されていますので、必ず覚えておきましょう。<br>
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題3.</span> Apache起動／停止</h4>
            <p>
                <b>１．ターミナルを開き、コマンドからApacheの起動／停止を実行してください。</b><br>
                <br>
                Apacheの起動と停止は、「systemctl」コマンドを使って操作します。<br>
                root（管理者）権限に切り替えてからコマンドを実行してください。<br>
                <br>
                <b>２．WebブラウザからApacheの初期表示を確認し、スクリーンショットを保存してください。</b><br>
                <br>
                起動したApacheを確認する為のURLを調べ、初期表示のスクリーンショットを保存します。<br>
            </p>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>