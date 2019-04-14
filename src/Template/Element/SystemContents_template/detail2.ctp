<div>
  <div class="system-contents__detail">
    <p class="system_contents__detail-header">LAMP環境とは？</p>
    <p>
      <br>
      簡単に言うとWebサーバーを運用する環境です。<br>
      <br>
      「LAMP」というアルファベット一文字ずつに意味があり、「Linux（OS）」「Apache（Webサーバー）」「MySQL（データベース）」「PHP（プログラミング）」<br>
      4つの環境で構成されています。<br>
      <br>
      今回は、アプリケーションを開発する為の環境としてローカルにLAMP環境を構築していってもらいますが、<br>
      実際に構築したLAMP環境を外から見れるようにネットワークの設定をすれば、一台のサーバーマシンとして運用する事ができます。<br>
      <br>
      しかし、全てのWebアプリケーションがこのLAMP環境で動くわけではありません。<br>
      <br>
      それを知ってもらう為に、これから2回に分けてLAMP環境を完成させていきましょう。<br>
      レベル1では、LAMPの<b>「L」「A」</b>を、レベル2では<b>「M」「P」</b>を構築します。<br>
      <br>
      今回はLAMP環境を仮想マシン上に構築していくので、まずは仮想環境を作成する所から始めていきます。<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題1　仮想環境をインストールする</p>
    <p>
      <br>
      １．仮想環境について、Webや書籍などを参考にどのようなものか調査してください。<br>
      <br>
      ２．仮想環境を作る為、仮想化ソフトである「VirtualBox」、「VMware」のどちらかをインストールしてください。<br>
      <br>
        【課題条件】<br>
      ・ダウンロードした教材ファイルの「調査資料_解答.txt」に解答を入力<br>
      ・仮想化ソフトのバージョン指定は無し<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題2　仮想環境にLinuxをインストールする</p>
    <p>
      <br>
      １．Linuxについて、Webや書籍などを参考にどのようなものか調査してください。<br>
      <br>
      ２．課題１でインストールした仮想化ソフトを使用して、Linux環境を構築してください。<br>
      <br>
      【課題条件】<br>
       ・ダウンロードした教材ファイルの「調査資料_解答.txt」に解答を入力<br>
      ・インストールするLinuxディストリビューションは「CentOS」、バージョンは「7.x系」とする<br>
      ・GUI（デスクトップ）環境で操作ができる<br>
      <br>
      <br>
    </p>

    <p class="system_contents__detail-header">課題3　仮想環境にApacheをインストールする</p>
    <p>
      <br>
     １．Apacheについて、Webや書籍などを参考にどのようなものか調査してください。<br>
      <br>
      ２．課題２で構築したLinux環境にApacheをインストールしてください。<br>
      <br>
        【課題条件】<br>
   ・ダウンロードした教材ファイルの「調査資料_解答.txt」に解答を入力<br>
   ・インストールするApacheのバージョンは「2.x系」とする<br>
   ・自分のPCブラウザから仮想環境上のApache初期表示画面を確認する<br>
      <br>
      <br>
    </p>

   <p class="system_contents__detail-header">提出ファイル</p>
    <p>
      <br>
      【ファイル名　】 L1_lamp_氏名<br>
       【ファイル形式】 zip<br>
       【ファイル内容】<br>
   ・調査資料_解答.txt<br>
   ・CentOSのデスクトップ環境が表示されたスクリーンショット画像（拡張子の指定なし）<br>
   ・自分のPCブラウザから接続したApache初期表示画面のスクリーンショット画像（拡張子の指定なし）<br>
      <br>
      <br>
      制作したファイルは、教材一覧画面からアップロードしてください。<br>
      <br>
      <br>
    </p>

  </div>
</div>
<div class="system-contents__download">
<?php if($systemContent['file_type'] == 1): ?>
  <a target="_blank" href="<?= $this->Url->build(['controller'=>'systemContents', 'action'=>'download', $systemContent['id'], $systemContent['parent_category_id'], $systemContent['system_category_id']]) ?>">
<?php elseif($systemContent['file_type'] == 2): ?>
  <a href="<?= $this->Url->build(['controller'=>'systemContents', 'action'=>'download', $systemContent['id'], $systemContent['parent_category_id'], $systemContent['system_category_id']]) ?>">
<?php endif; ?>
    <button class="linkBtn_s box-color-<?= h($headerColor[$systemContent['level']]); ?>">教材をダウンロードする</button>
  </a>
</div>