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
                仮想環境のCentOSにPHPをインストールしていきます。<br>
                <br>
                インストールするバージョンによっては、ダウンロード参照先の変更などが必要になるので、正しいバージョンがインストールされるかどうか確認してから進めてください。<br>
                PHPのインストールに合わせて、Web開発に必要なPHPパッケージもインストールしておきましょう。MySQLへの接続パッケージは必ずインストールしておいてください。<br>
                <br>
                PHPのインストールが完了すれば、ついにLAMPサーバーの完成です。<br>
                サーバーの完成後は、ネットワークの設定やセキュリティ対策など、本番稼働に必要な設定がまだ残っているので、学習も兼ねて残りのサーバー設定を行っていきましょう。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> PHPインストール</h4>
            <p>
                <b>１．「yum」コマンドを使って、PHPをインストールしてください。</b><br>
                <br>
                ここでは、PHPバージョン7.xをインストールしていきます。<br>
                長く使用されてきたPHP5.x系の最終バージョンである5.6もサポート期限が迫っている為、新しいバージョンをインストールしておきましょう。<br>
                ※7.x系は、前バージョンと比べると大幅なパフォーマンスアップが謳われており、且つ5.x系との互換性もある為、バージョン切替えによるシステム修正などが必要ないと言われています。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> PHPの設定確認</h4>
            <p>
                <b>１．phpinfo関数を使って、Webブラウザから設定内容を確認してください。</b><br>
                <br>
                設定内容を表示する為のファイルtest.phpを作成し、WebサーバーでPHPが実行されるかを確認します。<br>
                <br>
                <b>２．PHPの設定内容が表示できたら、設定画面をスクリーンショットで保存してください。</b><br>
                <br>
                概要に載せてある画像例を参考に、設定画面のスクリーンショットを保存します。<br>
            </p>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>