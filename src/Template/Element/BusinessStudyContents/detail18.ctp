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
                仮想環境にLinuxOSをインストールしていきます。<br>
                <br>
                あまり馴染みのない人の為に、Linuxについて説明しておきましょう。<br>
                Linuxとは、WindowsやMac OSと同じOSの名称です。<br>
                WindowsやMac OSが有料ライセンスなのに対し、Linuxは無料で使用する事ができ、中身も変更できる、いわゆるオープンソースのOSになります。<br>
                Linuxには、様々なサーバー機能が用意されており、インストール直後からWeb、メールやFTPなどのサーバーを簡単に稼働させられる為、多くの企業がサーバー用途として使用しています。<br>
                Linuxは、Linuxカーネルという部分がOSの役割を担っていて、アプリケーションを動作させる為のライブラリなどをまとめた形態をディストリビューションと言います。<br>
                Linux自体、無料で中身も公開されているので、組織や個人でそれぞれの理念のもとに多くのディストリビューションが開発されています。<br>
                <br>
                今回使用するCentOSは、そのLinuxディストリビューションの1つで、商用Linuxディストリビューション「Red Hat Enterprise Linux（RHEL）」のソースコードを元に開発が進められている無償のディストリビューションになります。<br>
                高い信頼性と長期間のサポートが特長で、サーバー用アプリケーションも豊富に用意されています。<br>
                また、CentOSには「Yum」と呼ばれるアプリケーション管理システムとGUI環境が用意されている事も魅力の1つです。Yumを使用する事で、アプリケーションのインストール、更新、削除を簡単に行う事ができます。<br>
                GUI環境とは、Windowsのデスクトップ画面をイメージしてもらえると良いでしょう。<br>
                Linuxは、CUIというテキストベースでの操作が基本となるOSですが、GUI環境が用意されている事で、CUI操作に慣れていない人でも導入しやすくなっています。<br>
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題1.</span> 仮想マシンの作成</h4>
            <p>
                <b>１．VirtualBoxを起動し、CentOS用の仮想マシンを作成してください。</b><br>
                <br>
                仮想マシンの作成時にOSのタイプやバージョン、割り当てる容量やメモリなど、スペックを設定する事ができます。
            </p>
        </div>

        <div class="box-child__content">
            <h4><span>課題2.</span> CentOSインストール</h4>
            <p>
                <b>１．公式サイトからCentOS7のディスクイメージをダウンロードしてください。</b><br>
                ※今回は、デスクトップ画面（GUI）が含まれる標準パッケージ用のディスクイメージをダウンロードします。<br>
                ※ディスクイメージとは、DVDやCDのデータをファイルにしたもので、拡張子はisoとなります。<br>
                <br>
                CentOS公式サイト：<a href="https://www.centos.org/" target="_blank">https://www.centos.org/</a><br>
                <br>
                <b>２．ダウンロードしたディスクイメージを仮想マシンにセットし、CentOSをインストールしてください。</b><br>
                <br>
                インストール時に、地域や言語など、様々な設定が必要になりますので、調べながら設定していきましょう。<br>
                <br>
                <b>３．インストールしたCentOSのデスクトップ画面のスクリーンショットを保存してください。</b><br>
            </p>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>