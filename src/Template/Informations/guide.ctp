<?php
?>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="box-shadow">
        <div class="box-header with-border">
          <div class="box-header__wrapper-b">
            <h2 class="box-title"><i class="fa fa-exclamation-circle"></i>&ensp;使い方ガイド</h2>
          </div>
        </div>
        <div class="box-body">

          <div class="box-child">

            <div class="box-child__content">
              <ul class="content__index">
                  <li><a href="#how"><i class="fa fa-fw fa-commenting"></i> 学習の進め方は？</a></li>
                  <li><a href="#score"><i class="fa fa-fw fa-commenting"></i> 提出課題の評価方法は？</a></li>
              </ul>
            </div>

          </div>

          <div id="how" class="box-child">
            <div class="box-child__title">
              <h3><span>学習の進め方は？</span></h3>
            </div>

            <div class="box-child__content">
              <h4><span>Step1.</span> 学習コース／学習課題を決める！</h4>
              <p>
                まずは、今あなたが学習したい、または興味がある職種・分野のコースを選択してください。<br>
                  <small>※学習する職種や分野について知りたい人は<a href="">こちら</a></small><br>
                コースを選択したら、そのコースにどんな内容の教材があるかざっと確認してみてください。<br>
                プログラミング経験のある人は、今の自分のレベルに合った教材を選んでください。<br>
                これからプログラミングを始めるという人は、基礎学習から始めていきましょう！
              </p>
            </div>

            <div class="box-child__arrow"><i class="fa fa-fw fa-angle-double-down"></i></div>

            <div class="box-child__content">
              <h4><span>Step2.</span> 教材をダウンロードして、学習スタート！</h4>
              <p>
                課題概要を確認し、教材をダウンロードしてください。<br>
                <small>※ダウンロードの必要がない教材もあります</small><br>
                ある一定の環境が構築できていないと制作できない課題もあるので、その場合は先に環境構築用の課題をクリアしておく必要があります。<br>
                課題概要をよく読んでおかないと、概要と全く違うモノが出来上がってしまう可能性もあります。<br>
                評価にも関わってくる所なので、概要をよく読んでから学習をスタートしていきましょう。
              </p>
            </div>

            <div class="box-child__arrow"><i class="fa fa-fw fa-angle-double-down"></i></div>

            <div class="box-child__content">
              <h4><span>Step3.</span> 課題が終わったら、制作ファイルをアップロード！</h4>
              <p>
                課題が終わったら、各課題のアップロード画面から制作ファイルをアップロードしてください。<br>
                アップロードファイルの形式に関しては、各課題概要に記載してありますので、確認してからアップロードをしましょう。<br>
                基本的に、基礎学習編は自己学習用の教材なので、アップロードする機能はありません。<br>
                アップロード後、数日中に評価が反映されますので、しばらくお待ちください。
              </p>
            </div>

            <div class="box-child__arrow"><i class="fa fa-fw fa-angle-double-down"></i></div>

            <div class="box-child__content">
              <h4><span>Step4.</span> 評価スコアを確認。クリアなら次の課題へ！</h4>
              <p>
                評価が終わると、学習状況、もしくは教材一覧から評価とスコアが確認できます。<br>
                内容によっては課題の再提出になってしまう事もありますが、クリアできるまで何度でもチャレンジする事ができます。<br>
                <b class="error-message"> ― 課題提出時の注意事項 － </b><br>
                　<b>課題に関しての部分的なアドバイスは基本的に行っていません。課題提出後の評価コメントを参考にしてください。</b><br>
                　<b>課題に関してより具体的なアドバイスを希望する人、さらなるスキルアップを目指す人は、是非<a href="">こちら</a>をご利用ください。</b><br>
                <br>
                評価のステータスが「クリア」になったらその課題は達成です！新しい課題を決めてStep1からスタートしてください！
              </p>
            </div>
          </div>

          <div id="score" class="box-child">
            <div class="box-child__title">
              <h3><span>提出課題の評価方法は？</span></h3>
            </div>

            <div class="box-child__content guide-score__list">
              <h4>評価スコアについて</h4>
              <p>
                評価のステータス一覧になります。
              </p>
              <p>
                <span><b class="study__status system-contents__color-0"><?= h($uploadStatus[0]); ?></b></span>&nbsp;
                <span class="study__meter"><meter min="0" max="100" low="75" high="95" optimum="100" value="0"></meter></span>&nbsp;
                <span class="study__score"><b>0</b> スコア</span>
                <br>
                <br>
                まだ課題に一度も取り組んでいない場合のステータスです。<br>
                スコアは「0」で表示されます。
              </p>
              <p>
                <span><b class="study__status system-contents__color-1"><?= h($uploadStatus[1]); ?></b></span>&nbsp;
                <span class="study__meter"><meter min="0" max="100" low="75" high="95" optimum="100" value="0"></meter></span>&nbsp;
                <span class="study__score"><b>0</b> スコア</span>
                <br>
                <br>
                課題を提出した後、評価中のステータスです。数日中に評価が反映されます。<br>
                スコアは「0」で表示されます。
              </p>
              <p>
                <span><b class="study__status system-contents__color-2"><?= h($uploadStatus[2]); ?></b></span>&nbsp;
                <span class="study__meter"><meter min="0" max="100" low="75" high="95" optimum="100" value="74"></meter></span>&nbsp;
                <span class="study__score"><b>74</b> スコア</span>
                <br>
                <br>
                提出した課題内容が基準の合格ラインを超えなかった場合のステータスです。課題の再提出が求められます。<br>
                スコアは「1～74」で表示されます。
              </p>
              <p>
                <span><b class="study__status system-contents__color-3"><?= h($uploadStatus[3]); ?></b></span>&nbsp;
                <span class="study__meter"><meter min="0" max="100" low="75" high="95" optimum="100" value="94"></meter></span>&nbsp;
                <span class="study__score"><b>94</b> スコア</span>
                <br>
                <br>
                提出した課題内容が合格ラインに達した場合のステータスです。課題をクリアする事で評価が上がり、次の課題に進む事ができます。<br>
                スコアは「75～94」で表示されます。
              </p>
              <p>
                <span><b class="study__status system-contents__color-4"><?= h($uploadStatus[4]); ?></b></span>&nbsp;
                <span class="study__meter"><meter min="0" max="100" low="75" high="95" optimum="100" value="100"></meter></span>&nbsp;
                <span class="study__score"><b>100</b> スコア</span>
                <br>
                <br>
                提出した課題内容がミス無く、ほぼ完璧だった場合のステータスです。Clear!よりもさらに高い評価がつけられます。<br>
                スコアは「95～100」で表示されます。
              </p>
            </div>
            <br>
            <br>
            <div class="box-child__content guide-score__list">
              <h4>評価基準について</h4>
              <p>
                提出課題の評価基準は、取り組む課題の分野によっても異なりますが、基本的には以下となります。
              </p>
              <p>
                <b> ― 可読性 － </b><br>
                「わかりやすいコメントが付いているか」、「インデントがしっかりと付いているか」など、他人が見てもすぐに内容が把握できるようなきれいなプログラムが書けているかをチェックします。<br>
                難易度の高い課題では、プロジェクトファイルの構成、ファイル名なども評価の対象となります。
              </p>
              <p>
                <b> ― 正確性 － </b><br>
                「実行時に不具合が起きないか」、「細かいテストを行ってから課題を提出しているか」など、仕様通りに正しく動作し、且つ様々なユーザー操作を想定してバグが発生しないようプログラムを書けているかをチェックします。
              </p>
              <p>
                <b> ― パフォーマンス性 － </b><br>
                主に難易度の高い課題用基準です。「無駄にメモリを消費するような作りになっていないか」、「DBの操作などで速度を意識したコードが記述できているか」など、ユーザーに対してストレスがない作りになっているかをチェックします。
              </p>
              <p>
                <b> ― 脆弱性 － </b><br>
                主に難易度の高い課題用基準です。「制作したサイトやアプリケーションにセキュリティホールはないか」など、セキュリティ対策がどの程度まで取られているかをチェックします。
              </p>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->