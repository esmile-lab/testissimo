<!DOCTYPE html>
<html lang="ja">
<head>
  <?= $this->element('include_head'); ?>
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body onload="<?= ucfirst($this->request->params['controller']) ?><?= ucfirst($this->request->params['action']) ?>Component()" class="hold-transition login-page" style="height: auto; min-height: 100%;">

<div class="bg_login bg_add">
  <div class="container">

    <div class="uploadLink" style="margin-top:5px;">
      <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'login']) ?>" class="btn box-color-gr">戻る</a>
    </div>

    <!-- Main content -->
    <section class="content container-fluid reset-bg" style="margin-top:5px;">
      <div class="row">
        <div class="box">
          <div class="box-header with-border">
            <div class="box-header__wrapper-b">
              <h2 class="box-title"><i class="fa fa-user-plus"></i>&ensp;ユーザー新規登録</h2>
            </div>
          </div>

          <?= $this->Form->create($user) ?>
            <div class="box-body">
              <div class="form-group">
                <p><b>Fortissimoを利用する為に、まずは会員登録を行ってください。</b></p>
                <br>
                <p><b class="error-message"> ― メールアドレス入力時のお願い － </b></p>
                <p><b>学校や会社などで使用しているメールアドレスではなく、個人で使用しているメールアドレス（Gメール、Yahooメールなど）を入力してください。</b></p>
                <p><b>PCメールの受信を拒否に設定されている方は、PCメールを許可するか、「@smile-fortissimo.com」のメールのみ受信できるように設定してください。</b></p>
              </div>

              <div class="form-group">
                <label for="mail1">ログインID／メールアドレス<span class="common__input--required">＊</span></label>
                <?= $this->Form->control('mail1', [
                    'type' => 'text',
                    'label' => false,
                    'class' => 'form-control',
                    'placeholder' => 'メールアドレスを入力'
                ]); ?>
              </div>
              <div class="form-group">
                <label for="password">
                  パスワード<span class="common__input--required">＊</span><br class="sp">
                </label>
                <?= $this->Form->control('password', [
                    'type' => 'password',
                    'label' => false,
                    'maxlength' => 16,
                    'class' => 'form-control',
                    'placeholder' => '8文字以上16文字以内の半角英数で入力'
                ]); ?>
              </div>
              <div class="form-group">
                <label for="password2">
                パスワード（確認用）<span class="common__input--required">＊</span><br class="sp">
                </label>
                <div class="input text required">
                  <input type="password" id="password2" maxlength="16" class="form-control" required="required" placeholder="8文字以上16文字以内の半角英数で入力" value="<?= h($user->password) ?>" >
                </div>
              </div>
              <div class="form-group">
                <label for="last_name">
                  ユーザー名<span class="common__input--required">＊</span>
                </label>
                <div class="input text required">
                  <input type="text" name="last_name" class="form-control users-all-name__input" required="required" maxlength="32" id="last-name" placeholder="名字" value="<?= h($user->last_name) ?>">
                </div>
                <div class="input text required">
                  <input type="text" name="first_name" class="form-control users-all-name__input" required="required" maxlength="32" id="first-name" placeholder="名前" value="<?= h($user->first_name) ?>">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <label for="last_name">
                  ユーザー名カナ<span class="common__input--required">＊</span>
                </label>
                <div class="input text required">
                  <input type="text" name="last_kana" class="form-control users-all-name__input" required="required" maxlength="32" id="last-kana" placeholder="名字" value="<?= h($user->last_kana) ?>">
                </div>
                <div class="input text required">
                  <input type="text" name="first_kana" class="form-control users-all-name__input" required="required" maxlength="32" id="first-kana" placeholder="名前" value="<?= h($user->first_kana) ?>">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <label for="is_mailing">メルマガ配信</label>
                <p>
                <?= $this->Form->radio('is_mailing', [
                      ['value' => '0', 'text' => '有', 'class' => 'minimal'],
                      ['value' => '1', 'text' => '無', 'style' => 'margin-left:10px;', 'class' => 'minimal']
                ]); ?>
                </p>
              </div>

          <div class="box-footer">
            <div class="privacy">
              <h5>・個人情報保護に関する基本方針</h5>
              <p>Fortissimo（以下「当サービス」といいます。）は、当サービスが運営するホームページを含めすべての業務において、お客様、採用応募者の方、当サービス従業員等、当サービスが個人情報をお預かりする方全ての個人情報(*1)を適切に保護することを当サービスの重要な社会的責務として考え、個人情報を適切に取り扱うため、以下のプライバシーポリシーを定め、個人情報の保護に努めてまいります。<br>
                注*1 ここでいう「個人情報」とは、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別できるものをいいます。</p>
              <ol>
                <li>当サービスでは、取引やサービスを提供するための個人情報を適法に収集し、本プライバシーポリシーに定める利用目的の達成に必要な範囲内で収集した個人情報を利用いたします。個人情報に人種・信条等の要配慮個人情報が含まれる場合には、法令により認められた場合を除き、ご本人の同意を得ることなく個人情報を取得しません。第三者から個人情報を取得する場合であって、法令上、第三者提供を受ける際の確認義務および記録作成・保存義務が発生する場合には、これを遵守します。</li>
                <li>収集したの個人情個人情報は、利用目的の範囲内で正確・完全・最新の内容に保つよう努め、紛失・破壊・改ざん・漏洩・不正アクセス等が生じないようにセキュリティ対策を講じて適正に管理いたします。</li>
                <li>個人情報保護法などの法令・ガイドラインを遵守して、個人情報を取扱ってまいります。</li>
                <li>当サービスは、個人情報の取扱いが適正に行われるよう従事者への教育を実施し、当該適正な取扱いにつき定期的に点検するとともに個人情報保護の取り組みを必要に応じて随時見直し、改善してまいります。</li>
                <li>当サービスでは、社会情勢の変化、技術の進歩、個人情報保護法の改正等に応じ、事前の予告なく本プライバシーポリシーを変更することがあります。</li>
              </ol>

              <h5>・個人情報の収集及び利用目的</h5>
              <p>当サービスは、ご提供いただいた個人情報を下記に定める目的のために利用します。</p>
              <ol>
                <li>当サービスのお問い合せサービスの申込の受付</li>
                <li>ご本人であることの確認</li>
                <li>当サービスのお問い合せサービスをご利用いただく条件等の確認・対応</li>
                <li>市場調査、データ分析やアンケートの実施および分析等によるサービスの研究や開発</li>
                <li>当サービスおよび当サービスの関連会社や提携会社のサービスのご提案</li>
                <li>その他、お取引を適切かつ円滑に履行するための業務</li>
                <li>採用応募目的でご提供いただいた個人情報は、採用に関するご案内やご連絡、採用選考に使用させていただくものとし採用選考後は当サービスにて再利用不可能な状態で廃棄させていただきます。</li>
                <li>当サービス従業員から提出された個人情報は、社会保険業務や給与計算業務などの業務に必要な範囲内で使用するものとしそれ以外の目的では使用しません。</li>
              </ol>

              <h5>・第三者への委託</h5>
              <p>当サービスは、お預かりした個人情報の処理を利用目的の範囲内で第三者に委託する場合があります。これらの第三者は、十分な個人情報のセキュリティー水準にあることを確認の上選定し、個人情報の適切な管理のための措置、秘密保持、再提供の禁止等個人情報維持管理に関する事項について、委託契約等を通じて、必要かつ適切な監督を行います。外国にある第三者に業務委託を行う場合であって、法令上、記録作成・保存義務が発生する場合には、これを遵守します。</p>

              <h5>・第三者提供</h5>
              <p>当サービスは、ご本人の同意を得たとき、個人情報保護法その他の法令等に基づく場合を除き、第三者に個人情報を提供しません。第三者に個人情報を提供する場合であって、法令上、第三者提供を行う際の記録作成・保存義務が発生する場合には、これを遵守します。</p>

              <h5>・共同利用</h5>
              <p>イースマイルホールディングスグループでは、イースマイルホールディングスグループとして一体的に行われる経営管理業務の遂行並びにお客様への商品・サービス等のご案内・ご提供及びその判断のために、グループ会社間で、以下のとおり、個人データを共同して利用することがあります。</p>
              <ol>
                <li>個人データの項目<br>イースマイルホールディングスグループ各社が保有する氏名、住所、電話番号、電子メールアドレス、性別、生年月日その他申込書等に記載されたお取引に関する情報</li>
                <li>共同利用するグループ会社の範囲<br>イースマイルエンジニアリング株式会社<br>イースマイル株式会社<br>イースマイルシステムズ株式会社<br>socialsharing株式会社</li>
                <li>個人データ管理責任者<br>イースマイルホールディングス株式会社</li>
              </ol>

              <h5>・個人情報保護方針に関するご意見、苦情、申し立て</h5>
              <p>当個人情報保護方針に関するご質問、または事項の遵守がなされていないとご判断された場合は、下記お問合せ窓口までご連絡下さい。内容の確認後、速やかにご返答し、必要があればお客様と連絡・協議させていただき、誠心誠意をもって解決させていただきます。</p>

              <h5>・個人情報の開示、訂正、削除等について</h5>
              <p>当サービスは、ご本人が自らの個人情報の開示、訂正、利用の停止、または消去などを希望される場合、ご本人であることを確認したうえですみやかに対応しますので、下記お問合せ窓口までご連絡下さい。</p>

              <h5>・Google Analytics の利用について</h5>
              <p>本サイトにおいてはサービス向上のためGoogle, Inc.のGoogle Analyticsを利用してサイトの計測を行っております。これに付随して生成されるテキストファイル「Cookie」を通じて分析を行うことがありますが、この際、IPアドレス等のユーザ様情報の一部が、Google, Inc.に収集される可能性があります。サイト利用状況の分析、サイト運営者へのレポートの作成、その他のサービスの提供目的に限りこれを使用します。利用者は、本サイトを利用することで、上記方法および目的においてGoogleが行うこうしたデータ処理につき許可を与えたものとみなします。</p>

              <h5>・お問合せ窓口</h5>
              <p>〒103-0016 東京都中央区日本橋小網町18-3 小網町ゼネラルビル<br>TEL：03-5645-1766（代）</p>
              <p>改定日：平成29年7月21日</p>
            </div>
            <p style="text-align:center;">Fortissimo利用規約をお読みいただき、同意される方のみボタンを押してください。</p>
            <button type="button" class="linkBtn_s box-color-db" style="width:300px;" onclick="addAction();">利用規約に同意して登録する</button>
          </div>

          </div>
          <!-- /.box-body -->
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
<div id="izi_modal" data-izimodal-title=""></div>
<div class="login-footer"></div>
  
  <?= $this->element('include_js'); ?>
</body>
</html>