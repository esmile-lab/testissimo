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

    .imgcenter {
        padding-left: 15px;
}
    .tab_content,.error-message,.rist {
        line-height: 1.8px;
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
<!--
            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">
-->

           <div class="box-child__content">
               <h4><span>課題1.</span>Webサイトの仕組み</h4>
               <p>
                   Webサイトがどのような仕組みで表示されてるのかを知識として身に着けます。<br>
                  「リクエスト」、「レスポンス」、「サーバー」、「通信」、「言語」など、これらのキーワードを使い、Webの仕組みについて理解できた項目を3つ挙げてください。
               </p>
           </div>
          
           <div class="box-child__content"> 
              <h4><span>課題2.</span>HTMLとは何か？</h4>
              <P>
                Webページの基盤として重要な役割を果たすHTMLがどのような言語かを、知識として身につけます。<br>「正式名称」、「バージョン」、「タグ」など、これらのキーワードを使い、HTMLについて理解できた項目を、3つ挙げてください。
              </P>
           </div>
  
           <div class="box-child__content"> 
               <h4><span>課題3.</span>CSSとは何か？</h4>
               <P>
                Webページのデザイン担当として重要な役割を果たすCSSが、どのような言語かを、知識として身につけます。<br>「正式名称」、「バージョン」、「プロパティ」など、これらのキーワードを使い、CSSについて理解できた項目を3つ挙げてください。
               </P>
           </div>
      
           <div class="box-child__content"> 
               <h4><span>課題4.</span>Webブラウザのインストール</h4>
               <P>
                Webページを閲覧する為には、ブラウザというアプリケーションソフトが必要です。<br>ここでは各OSにインストール可能で現在最もシェアが高いブラウザである、Googleが提供する「Google Chrome（グーグル・クローム）」とMozilla Foundationが提供する「Firefox（ファイアーフォックス）」の2つのブラウザをインストールしてみましょう。
               </P>
           </div>
           
           <div class="box-child__content"> 
               <h4><span>課題5.</span> エディタのインストール</h4>
               <P>
                エディタは、プログラムを書く為の必須ツールです。<br>使いやすいエディタを選ぶ事はプログラミングをしていく上でとても重要ですが、どのOS でも使用できるエディタを選ぶ事も選定基準の１つになります。<br>ここでは、Windows、Mac環境で使用できる「Brackets」をインストールしてみましょう。
               </P>
           </div>
        </div>
        <!-- 解説用 -->
        <div class="tab_content" id="answer_content">
<!--
            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>_answer.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">
-->
            <div class="box-child__content">
               <h4><span>課題1.</span>Webサイトの仕組み</h4>
               <P>
                   Webサイトがどのような仕組みで表示されてるのかを知識として身に着けます。<br>
                  「リクエスト」、「レスポンス」、「サーバー」、「通信」、「言語」など、これらのキーワードを使い、Webの仕組みについて理解できた項目を3つ挙げてください。<br><br>
                   <b class="error-message">【解説】</b><br><br>
                   普段何気なく検索などに使用しているインターネットのWebサイトですが、一体どのように仕組みで閲覧する事ができているのか、順を追って解説していきます。<br><br>
                   
                   <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_1/img1.png');?>" alt="img1" style="width:40%;"></div><br><br>
                </P>
                <br>
                
                <ol class="list">
                    <p><br>まずは、ブラウザ（Google Chrome、FireFoxなど）から、閲覧したいWebサイトへアクセスする時に、URLであるドメイン名を入力すると・・・
                    </p>
                  <li class="list">
                    <p>
                      実際にWebサイトを閲覧する為には、ドメイン名を入力しただけではサイトを閲覧する事はできず、ドメイン名からIPアドレス（インターネット上の住所）に変換しなければならないのです。<br>ではどうやって変換するかというと、DNSサーバー（Domain NameSystem）という所にIPアドレスが何かを教えてもらいにいきます。
                    </p>
                  </li>
                  <li class="list">
                    <p>
                      問合せを受けたDNSサーバーは、受け取ったドメイン名を元にIPアドレスを探し出して、ブラウザに返します。
                    </p>
                  </li>
                  <li class="list">
                    <p>
                       閲覧したいWebサイトのIPアドレスを知ったブラウザはこの情報を元に対象のWebサーバーに接続をかけます。<br>接続の確認が取れたら、見たいページや条件などをリクエストとして送信します。
                    </p>
                  </li>
                  <li class="list">
                    <p>
                      「このページが見たい」とブラウザからリクエストを受けたWebサーバーは、そのページを表示する為のHTMLファイルやCSSファイルをレスポンスとしてブラウザに返します。
                    </p>
                  </li>
                </ol>
                <p>
                  これらの工程でようやくWebサイトを閲覧する事ができました！！<br>正確に言うともう少し細かい事をやっていますが、まずはWebサイトがどのような仕組みで表示されているかイメージを作る事が大切なので、この内容をしっかりと理解しておきましょう。
                </p>
<!--
                <p>
                   まずは、ブラウザ（Google Chrome、FireFoxなど）から、閲覧したいWebサイトへアクセスする時に、URLであるドメイン名を入力すると・・・<br><br>
                   ① ：実際にWebサイトを閲覧する為には、ドメイン名を入力しただけではサイトを閲覧する事はできず、ドメイン名からIPアドレス（インターネット上の住所）に変換しなければならないのです。<br>ではどうやって変換するかというと、DNSサーバー（Domain NameSystem）という所にIPアドレスが何かを教えてもらいにいきます。<br><br>
                   ② ：問合せを受けたDNSサーバーは、受け取ったドメイン名を元にIPアドレスを探し出して、ブラウザに返します。<br><br>
                   ③ ：閲覧したいWebサイトのIPアドレスを知ったブラウザはこの情報を元に対象のWebサーバーに接続をかけます。<br>接続の確認が取れたら、見たいページや条件などをリクエストとして送信します。<br><br>
                   ④ ：「このページが見たい」とブラウザからリクエストを受けたWebサーバーは、そのページを表示する為のHTMLファイルやCSSファイルをレスポンスとしてブラウザに返します。<br><br>
                   これらの工程でようやくWebサイトを閲覧する事ができました！！正確に言うともう少し細かい事をやっていますが、まずはWebサイトがどのような仕組みで表示されているかイメージを作る事が大切なので、この内容をしっかりと理解しておきましょう。
                </p>
-->
            </div>
          
            <div class="box-child__content">
               <h4><span>課題2.</span>HTMLとは何か？</h4>
               <P>
                Webページの基盤として重要な役割を果たすHTMLがどのような言語かを、知識として身につけます。<br>「正式名称」、「バージョン」、「タグ」など、これらのキーワードを使い、HTMLについて理解できた項目を、3つ挙げてください。<br><br>
                <b class="error-message">【解説】</b><br><br>
                HTML（HyperText Markup Language）とは、ウェブページを作成するために開発された言語です。<br>現在、インターネット上に公開されているWebページは、全てと言って良いくらいこの言語で作成されています。<br>HTMLは様々な種類のタグを書いてページを作っていくのですが、このタグの集まりをブラウザが解析・変換して人々が見やすいWebページが表示されるのです。<br>
                プログラミング言語には必ずと言っていいほどバージョンというのか存在します。<br>
                HTMLが誕生した時はバージョン1.0でした。<br>少し前まではHTML4.01が多く使われていましたが、今はHTML5が主流になっていて、一部のブラウザ（旧バージョン）以外はほとんどで適用されています。<br>もちろん、バージョンが上がるという事は少しずつ良いモノになるという事です。<br>HTMLも4.01から5に上がった事で、お作法的な記述部分がシンプルに書く事ができるようになり、さらに使用できるタグが増え、動画や音声、図形など様々な効果をHTMLで書けるようになりました。
               </P>
            </div>
          
            <div class="box-child__content">
               <h4><span>課題3.</span>cssとは何か？</h4>
               <P>
                   Webページのデザイン担当として重要な役割を果たすCSSがどのような言語かを知識として身につけます。<br>「正式名称」、「バージョン」、「プロパティ」など、これらのキーワードを使い、CSSについて理解できた項目を3つ挙げてください。<br><br>
                   <b class="error-message">【解説】</b><br><br>
                   CSS（Cascading Style Sheets）とは、Webページのデザイン部分を担当する為の言語です。<br>CSSは、単体で動作する事はなく、あくまでHTMLと協力して見た目の良いページを作りあげます。<br>HTMLで書いたタグにCSSの様々なプロパティを使って、文字の色を変えたり、画像のサイズを調整したりできるようになるのです。<br>実は、スタイルの記述はHTMLタグの中にも書く事ができるのですが、現在はあまり良い事とされていません。<br>HTMLタグでページの構造を作り、CSSでデザインを当て込むと言った各々の役割を混在させない書き方がきれいなプログラムコードになります。<br>
                   CSSにもやはりバージョンというモノがあり、最初にCSS1が誕生してから、少しずつバージョンアップを繰り返し、現在最も新しいバージョンがCSS3となっています。<br>こちらも他の言語同様に、バージョンが上がる事に機能が増えてきていて、CSS3になってからは、グラデーションやシャドウ、アニメーションなどのエフェクトもつけられるようになりました。<br>
                   さらに現在のCSSは、CSS専用のスクリプト言語を使用できるようになった事で記述も複雑になり、完全にプログラミング言語化してしまっています・・・。<br>
                   この流れに早く追いつけるようまずはCSS3の基本から始めていきましょう！！
               </P>
            </div>
            <div class="box-child__content">
               <h4><span>課題4.</span>Webブラウザのインストール</h4>
                   <P>
                       Webページを閲覧する為にはブラウザというアプリケーションソフトが必要です。<br>ここでは各OSにインストール可能で現在最もシェアが高いブラウザである、Googleが提供する「Google Chrome（グーグル・クローム）」とMozilla Foundationが提供する「Firefox（ファイアーフォックス）」の2つのブラウザをインストールしてみましょう。
                   </P>
                   <p>
                       <b class="error-message">【解説】</b><br><br>
                       ブラウザの種類は、Google Chrome、Firefox以外にもMicrosoft Edge、Safariなどがありますが、Google Chromeや Firefoxを使用する理由はほとんどのプラットフォーム（PCやスマホなどに搭載されている各OS）で使用できるという所です。<br>シェアの面で考えても、この2つで動作確認をしながら制作を進めていくのがベストなやり方ではないでしょうか。<br>もちろんどのブラウザでも正しく動作するように作らなければならないのですが、昔と違ってブラウザによる挙動の違いなども少しずつ少なくなってきているので、まずは王道のブラウザを使いながら制作を進めていきましょう。<br><br>
                       Google Chromeは下記URLからダウンロードできます。<br>
                       <a href="https://www.google.com/chrome/" target=" blank">https://www.google.com/chrome/</a><br><br>
                       Firefoxは下記URLからダウンロードできます。<br>
                       <a href="https://www.mozilla.org/ja/firefox/" target=" blank">https://www.mozilla.org/ja/firefox/</a><br><br>
                       インストーラーをダウンロードしたら、実行してインストールをしていきます。
                    </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題5.</span>エディタのインストール</h4>
                <p>
                    エディタは、プログラムを書く為の必須ツールです。<br>使いやすいエディタを選ぶ事はプログラミングをしていく上でとても重要ですが、どのOSでも使用できるエディタを選ぶ事も選定基準の１つになります。<br>ここでは、Windows、Mac環境で使用できる「Brackets」をインストールしてみましょう。
                </p>
                <p>
                    <b class="error-message">【解説】</b><br><br>
                    エディタも種類がたくさんあり、OSによってメジャーなエディタは変わってきます。<br>
                    シンプルなエディタで言えば、Windows の「Sakura」、Macの「mi」、Linuxの「vim」「gedit」などがあります。<br>これらのエディタでももちろんコードを書く事ができますが、今回はWEB開発エディタとしてより高機能なAdobeが提供する「Brackets」エディタをインストールしていきます。<br>他にも同じようなツールで「SublimeText」、「Atom」などがありますが、インストールしてすぐに日本語版で使えるなど、環境設定が簡単な事がこのエディタを選んだ理由です。<br><br>
                    Bracketsは下記URLからダウンロードできます。<br>
                    <a href="http://brackets.io/" target=" blank">http://brackets.io/</a><br><br>
                    インストーラーをダウンロードしたら、実行してインストールをしていきます。<br>途中、インストール先の変更や起動時の設定がでてきますが、特に指定がなければそのまま進んでインストールを完了してください。<br>
                </p>
                 <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_1/img2.png');?>" alt="img2" style="width:35%;">
                </div>
                <p>
                    <br>
                    Bracketsには制作しながら画面を確認できるライブプレビュー機能など、便利な機能が標準で搭載されているので、今後の画面制作時に使っていきましょう。
                </p>
            </div>
        </div>
    </div>
</div>