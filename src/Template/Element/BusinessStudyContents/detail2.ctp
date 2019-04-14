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
    
.detail2_table {
    
    border-collapse:collapse;
    width:50%;
    
}

.detail2_table, .detail2_table th, .detail2_table td {
    border:1px solid #000;
}

.detail2_table th {
    background-color:#808080;
}

.tdetail2_table td {
    text-align:right;
    }
    
.imgcenter{
     padding-left: 15px;
}
.tab_content .error-message .list {
    line-height: 1.8px;
    }
.year {
    text-align: center; 
}

.number {
    text-align: right;    
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
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">-->
           <div class="box-child__content">
               <h4><span>課題1.</span>HTMLの基本構成</h4>
               <p>
                   ダウンロードした教材<b>「index.html」</b>に以下4つのタグを記述し、HTMLの基本構成を完成させてください。
               </p>
               <ol class="list">
                   <li class="list">
                       <p>
                           &lt;<b>!DOCTYPE</b>&gt;
                       </p>
                   </li>
                   <li class="list">
                       <p>&lt;<b>html</b>&gt;</p>
                   </li>
                   <li class="list">
                       <p>&lt;<b>head</b>&gt;</p>
                   </li>
                   <li class="list">
                       <p>&lt;<b>body</b>&gt;</p>
                   </li>
               </ol><br>
               
               <p>
                   基本構成が完成したら、これらのタグがどのような役割を果たしているのか調べておきましょう。
               </p>
           </div>
          
           <div class="box-child__content"> 
               <h4><span>課題2.</span>headタグの基本構成</h4>
               <P>
                   「index.html」の&lt;head&gt;内に下記3つの情報を追記します。<br>各情報を記述するにはその内容にマッチするタグを使用する必要があります。<br>該当するタグを調べて&lt;head&gt;タグを完成させてください。
               </P>
               
                   <ol class="list">
                       <li class="list">
                           <p><b>ファイルの文字コード：UTF-8</b>
                           </p>
                       </li>
                       <li class="list">
                           <p><b>ページの説明文：夏目漱〇石が書いた長編小説【吾輩はテスト猫である】の作品紹介ページです。</b>
                           </p>
                       </li>
                       <li class="list">
                           <p><b>ページタイトル：吾輩はテスト猫である</b>
                           </p>
                       </li>
                   </ol>
           </div>
  
           <div class="box-child__content"> 
               <h4><span>課題3.</span>見出しの作成</h4>
               <P>
                   <b>「index.html」</b>の&lt;head&gt;が完成したので、次は&lt;body&gt;にコンテンツを書いていきます。<br>下記の画像と情報を参考に、見出しをつけてください。
               </P>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>&lt;h1&gt;：吾輩はテスト猫である</b>
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>&lt;h2&gt;：【画像】、【記事】</b>
                           </p>
                       </li>
                       <li class="list">
                           <p><b>&lt;h3&gt;：年代別売上表、購入方法</b>
                           </p>
                       </li>
                   </ol>
               <br>
        
               <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_2/img1.png');?>" alt="img1" style="width:40%;">
               </div><br><br>
                <p>
           </div>
      
           <div class="box-child__content"> 
               <h4><span>課題4.</span>記事の作成</h4>
               <P>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、中見出し内に&lt;img&gt;と&lt;p&gt;を追加して、ページを完成させてください。
               </P>
                   <ol class="list">
                       <li class="list">
                           <p><b>&lt;h1&gt;：【画像】：html/img/img1.jpg</b>
                           </p>
                       </li>
                       <li class="list">
                           <p><b>&lt;h2&gt;：【記事】：</b>
                           </p>
                       </li>
                   </ol>
               <P>    
                   <b>「吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だ けは記憶している。吾輩はここで初めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々をつかまえて煮にて食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。」
                   </b>
               </P>
               <br>
               
               <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_2/img2.png');?>" alt="img2" style="width:40%;">
               </div><br><br>
               <p>
           </div>
            
           <div class="box-child__content">
               <h4><span>課題5.</span>表の作成</h4>
               <p>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、小見出し（年代別売上表）に&lt;table&gt;を作成し、表を完成させてください。<br>※CSS を設定していない為、枠線などは表示されません。
               </p><br>
                       
               <table class="detail2_table">
                   <tr>
                       <th></th>
                       <th class="year">2016年</th>
                       <th class="year">2017年</th>
                       <th class="year">2018年</th>
                       <th class="year">2019年</th>
                   </tr>
                   <tr>
                       <th class="year">10～20代</th>
                       <td class="number">380</td>
                       <td class="number">2300</td>
                       <td class="number">5300</td>
                       <td class="number">15000</td>
                   </tr>
                   <tr>
                       <th class="year">30～40代</th>
                       <td class="number">1</td>
                       <td class="number">100</td>
                       <td class="number">300</td>
                       <td class="number">1000</td>
                   </tr>
                   <tr>
                       <th class="year">50～60代</th>
                       <td class="number">25</td>
                       <td class="number">10</td>
                       <td class="number">1000</td>
                       <td class="number">20000</td>
                   </tr>
               </table>
               <br>
               <br>
               <br>
               
                   <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_2/img3.png');?>" alt="img3" style="width:40%;">
                   </div><br><br>
           </div>
            
           <div class="box-child__content">
               <h4><span>課題6.</span>リストの作成</h4>
               <p>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、小見出し（購入方法）に&lt;ul&gt;、&lt;li&gt;を作成し、購入先リストを完成させてください。
               </p>
               
               <ol class="list">
                   <li class="list">
                       <p><b>リスト 1：Amazon</b>
                       </p>
                   </li>
                   <li class="list">
                       <p><b>リスト 2：Yahoo</b>
                       </p>
                   </li>
                   <li class="list">
                       <p><b>リスト 3：Google</b>
                       </p>
                   </li>
               </ol>
               <br>
               
               <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_2/img4.png');?>" alt="img4" style="width:40%;">
               </div>
               <br>
               <br>
           </div>
            
           <div class="box-child__content">
               <h4><span>課題7.</span>リンクの作成</h4>
               <p>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、小見出し（購入方法）作成したリストに対して&lt;a&gt;タグを作成し、リンクを完成してください。
               </p>
               
               <ol class="list">
                   <li class="list">
                       <p>
                       <b><a href="https://amazon.co.jp" target="blank">amazon：https://amazon.co.jp</a><br></b>
                       </p>
                   </li>
                   <li class="list">
                       <p>
                       <b><a href="https://google.co.jp" target="blank">Google：https://google.co.jp</a></b>
                       </p>
                   </li>
                   <li class="list">
                       <p>
                       <b><a href="https://yahoo.co.jp" target="blank">Yahoo：https://yahoo.co.jp</a></b>
                       </p>
                   </li>
               </ol>
               <br>
               
               <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_2/img5.png');?>" alt="img5" style="width:40%;">
               </div>
               <br>
               <br>
           </div>
        </div>
        <!-- 解説用 -->
        <div class="tab_content" id="answer_content">
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>_answer.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">-->
           <div class="box-child__content">
               <h4><span>課題1.</span>HTMLの基本構成</h4>
               <p>
                   ダウンロードした教材<b>「index.html」</b>に以下4つのタグを記述し、HTMLの基本構成を完成させてください。
               </p>
               <ol class="list">
                   <li class="list">
                       <p>
                           &lt;<b>!DOCTYPE</b>&gt;
                       </p>
                   </li>
                   <li class="list">
                       <p>
                           &lt;<b>html</b>&gt;
                       </p>
                   </li>
                   <li class="list">
                       <p>
                           &lt;<b>head</b>&gt;
                       </p>
                   </li>
                   <li class="list">
                       <p>
                           &lt;<b>body</b>&gt;
                       </p>
                   </li>
               </ol>
               <br>
               <p>
                   基本構成が完成したら、これらのタグがどのような役割を果たしているのか調べておきましょう。
               </p>
               <br>
               <br>
               
               <b class="error-message">【解説】</b><br><br>
               <p>
                   ※ソースコードは解答用の教材ファイルを参照してください。<br>
                   なんとなく書いても表示されてしまうのがHTMLなので、タグや構成の意味を理解せずにコーディングしているという人も少なくないと思います。<br>まずはHTMLの基本構成とタグの役割について説明します。<br>
                   タグは&lt;&gt;で囲み、タグの終了には&lt;/&gt;で閉じるようにします。
               </p>
               <br>
               
               <ol class="list">
                   <li class="list">
                       <p>
                           <b>&lt;!DOCTYPE html&gt;</b>
                       </p>
                       <p>
                           HTMLファイルの1行目にはDOCTYPE宣言を記述します。<br>この記述はHTML5を使用する事を宣言しています。<br>HTML4.01のDOCTYPE宣言は記述がとても長かったので、HTML5でシンプルな記述になりました。
                       </p>
                   <li class="list">
                       <p>
                           <b>&lt;html lang="ja"&gt;&lt;/html&gt;</b>
                       </p>
                       <p>
                           &lt;html&gt;タグは、DOCTYPE宣言以降全てのタグ要素を囲むHTMLの大枠です。<br>日本語のページを作成する為、「lang」属性に「ja」を指定しています。<br>この指定がないと、ブラウザ次第ではフォントの優先設定や翻訳機能などが動作しない可能性があります。<br>タグ内に記述してある xxx=’’を属性と言います。
                       </p>
                   <li class="list">
                        <p>
                            <b>&lt;head&gt;&lt;/head&gt;</b>
                        </p>
                        <p>
                            &lt;head&gt;タグには、webページに関する設定を記述します。<br>cssファイルなど、外部ファイルの読込みもここに記述するようにします。
                        </p>
                   </li>
                   
                   <li class="list">
                       <p>
                           <b>&lt;body&gt;&lt;/body&gt;</b>
                       </p>
                       <p>
                           &lt;body&gt;タグには、webページに表示するコンテンツを記述します。<br>基本的に、表示にかかわるタグは全てこの中に書くので、一番ボリュームが大きくなる部分です。<br>これらの枠の中に各設定やコンテンツのタグを記述していく事でHTMLファイルは作られます。
                       </p>
                   </li>
                   <br>
               </ol>
               <br> 
                          <b class="error-message">・POINT・ タグの属性について</b><br><br><br>
                       
                              <P>
                                  &lt;html&gt;タグで少し説明がありましたが、属性は、タグに補足的な情報を与える為に使用します。<br>記述方法は<b>「属性名="識別名"」</b>とし、タグ内に半角スペース区切り記述していきます。<br>属性も様々な種類がありますが、ここでは基礎編で必要となる属性を解説します。
                              </P>
               
               <ol class="list">
                   <br>
                   <li class="list">
                       <p>
                           <b>&lt;xxx id="<font color="#99CCFF">ID名</font>"&gt;</b>
                       </p>
                       <p>
                           タグにID名を付けます。<br>HTMLページを制作するだけなら出番はあまり無いかもしれませんが、Javascriptを使用する時にタグを識別する為のIDとして使う事もできます。<br>あまり推奨されていませんが、CSSのセレクタとしても使用する事ができます。<br>ID属性は、基本的に全てのタグ（グローバル属性）で使用する事ができますが、ページ内でIDは原則一意なので、重複しないように注意しましょう。
                       </p>
                   </li>
                   <li class="list">
                       <p>
                           <b>&lt;xxx name="<font color="#99CCFF">名前</font>"&gt;</b>
                       </p>
                       <p>
                           タグに名前を付けます。<br>用途はIDと似ていて、HTMLページを制作するだけなら出番はあまり無いかもしれませんが、Javascriptを使用する時にタグを識別する為の名前として使う事もできます。<br>あまり推奨されていませんが、CSSのセレクタとしても使用する事ができます。<br>名前属性は、多くのタグで使用する事ができ、同じ名前を複数のタグに記述する事もできます。
                       </p>
                   </li>
                   <li class="list">
                       <p>
                           <b>&lt;xxx class="<font color="#99CCFF">名前</font>"&gt;</b>
                       </p>
                       <p>
                           タグにCSSを関連付ける為のクラス名を付けます。<br>基礎編で一番覚えてほしい属性でもあります。<br>class属性もJavascriptを使用する時にタグを識別する為の名前として使う事ができてしまうのですが、できるだけCSSのセレクタとしてのみ使用するようにしましょう。<br>class属性は、基本的に全てのタグ（グローバル属性）で使用する事ができます。<br>共通化の為の重複も可能で、さらに半角スペースで区切る事で複数のクラス名を指定する事もできます。
                       </p>
                   </li>
               </ol>
               <br>
                       
                          <b class="error-message">・POINT・HTMLを書き始める前に</b><br><br><br>
                       
                              <P>
                                  HTMLは他の言語と比べると記述方法の自由度が高い言語です。<br>表示されれば良いという姿勢で自由にプログラムを書いてしまうと、ソースコードが煩雑になり、パフォーマンスの低下を招きかねません。<br>さらに、プロジェクトでソースを複数のメンバーと共有する時なども、可読性を下げ、管理しづらくなってしまいます。<br>そこで「コーディング規約」、いわゆる記述方法のルールを決めておく事が大切になってきます。<br>コーディング規約はHTMLだけに限った話ではなく、会社によっては可読性を上げる為にコーディング規約が細かく決められているケースも多いです。<br>今の段階でしっかりとした規約を作るようにとは言いませんが、将来的には可読性の高い自分流のルールをしっかりと決めてコーディング規約を作っていってほしいと思います。<br><br>まずはコーディング規約の入門として、インデントをつけるようにしてみましょう。<br>インデントは、タグの階層ごとに字下げを行う事で読みやすくする手法です。<br>インデントの付け方は、半角スペース2とタブの2通りが主流です。<br>半角スペース2の方が、環境による表示の崩れがない事もあり主流になっているように感じますが、タブの方はタイプ数が少ない為、効率的という意見もあります。<br><br>どちらがコーディングしやすいか、実際に試してみて決めると良いでしょう。
                              </P>
               
           </div>
            
           <div class="box-child__content">
               <h4><span>課題2.</span>HTMLの基本構成</h4>
               <P>
                   <b>「index.html」</b>の&lt;head&gt;内に下記3つの情報を追記します。<br>各情報を記述するにはその内容にマッチするタグを使用する必要があります。<br>該当するタグを調べて&lt;head&gt;タグを完成させてください。
               </P>
               <br>
               
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>ファイルの文字コード：UTF-8</b>
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>ページの説明文：夏目漱〇石が書いた長編小説【吾輩はテスト猫である】の作品紹介ページです。</b>
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>ページタイトル：吾輩はテスト猫である</b>
                           </p>
                       </li>
                   </ol>
               <br>
               <b class="error-message">【解説】</b><br><br>
               <p>
                   ※ソースコードは解答用の教材ファイルを参照してください。<br><br>
                   &lt;head&gt;タグには様々な設定タグを記述する事ができます。<br>SEO対策でも重要な部分になりますので、まずは基本設定を覚えておきましょう。
               </p>
               <br>
               
                   <ol class="list">
                       <li class="list"><b>&lt;meta charset="UTF-8"&gt;</b></li><br>
                           <p>
                               &lt;meta&gt;タグに「charset」属性を記述する事で、htmlファイルの文字エンコードを指定します。<br>近年では「UTF-8」が多く使用されるようになっています。<br>文字化け現象は、この設定に原因があるケースも多くあります。
                           </p>
                       <br>
                       <br>
                           <b class="error-message">・POINT・ファイルの文字コード</b><br><br><br>
                           ファイルもここで指定したエンコードで保存するのを忘れないようにしましょう。<br>「UTF-8」での保存を癖づける事が大切です。<br><br>
                       <li class="list">
                           <p>
                               <b>&lt;meta name="description" content="<font color="#99CCFF">サイト・ページの説明文</font>"&gt;</b>
                           </p>
                       </li>
                       
                       <p>
                           &lt;meta&gt;タグにサイトやページの説明文を記述する事ができます。<br>検索結果のリンク下（スニペット）に表示される内容になります。検索結果での表示部分は120文字程度（スマホの場合は50文字程度）なので、そのくらいの長さでおさまるように説明文を作成します。<br>SEO対策の基本、且つ重要な部分になるので、必ず書くようにしましょう。
                       </p>
                       
                       <li class="list">
                           <p>
                               <b>&lt;title&gt;<font color="#99CCFF">ページのタイトル</font>&lt;/title&gt;</b>
                           </p>
                       </li>
                       <p>
                           &lt;title&gt;タグ内にページのタイトルを設定する事ができます。<br>タイトルはブラウザのブックマーク、検索結果など様々な場所で表示されます。
                       </p>
                       <li class="list">
                           <p>
                               <b>&lt;meta name="keywords" content="<font color="#99CCFF">キーワード1,キーワード2</font>"&gt;</b></p>
                       </li>
                           <p>
                               &lt;meta&gt;タグにサイトやページのキーワードを記述する事ができます。以前はこのキーワードがユーザーの検索ワードとリンクさせる為の重要な要素だったのですが、キーワードの乱用などが横行した為、現在のクロールエンジンのアルゴリズムではこの内容を見ていないと公表されています。クローラーが見ていない上に、サイトの検索ワードがユーザーに知られてしまうという理由から記述を推奨しない意見も多くなってきています。
                           </p>
                       <li class="list">
                           <p>
                               <b>&lt;meta name="author" content="Taro Yamada"&gt;</b>
                           </p>
                       </li>
                           <p>
                               &lt;meta&gt;タグにファイルの作者を指定できます。基本的にはあってもなくても違いはありませんが、共有時の情報として記述しておいても良いでしょう。
                           </p>
                       <li class="list">
                           <p>
                               <b>&lt;link rel="stylesheet" href="<font color="#99CCFF">cssファイルのパス</font>"&gt;</b>
                           </p>
                       </li>
                           <p>
                               外部ファイルで定義してあるスタイルシートを読み込む事ができます。
                           </p>
                       <li class="list">
                           <p>
                               <b>&lt;script type="text/javascript" src="<font color="#99CCFF">jsファイルのパス</font>"&gt;&lt;/script&gt;</b>
                           </p>
                       </li>
                           <p>   
                              外部ファイルで定義してあるJavascriptを読み込む事ができます。<br><br>
                              &lt;meta&gt;タグでの設定が多く出てきましたが、&lt;meta&gt;タグに指定されている内容は、ウェブブラウザや検索エンジンに向けた情報で、ここで書いている以外にも様々な設定があり、今後も増えていくと言われています。<br>ここでは解説しませんが、レスポンシブ化対応の「viewport」や SNS 関連の「OGP」設定なども記述する事ができます。
                           </p>
                   </ol>
            </div>
            
            <div class="box-child__content">
               <h4><span>課題3.</span>見出しの作成</h4>
               <P>
                   <b>「index.html」</b>の&lt;head&gt;が完成したので、次は&lt;body&gt;にコンテンツを書いていきます。<br>下記の画像と情報を参考に、見出しをつけてください。
               </P><br>
               
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>&lt;h1&gt;：吾輩はテスト猫である</b>
                           </p>
                       </li>
                       <li class="list"><p><b>&lt;h2&gt;：【画像】、【記事】</b>
                           </p>
                       </li>
                       <li class="list"><p><b>&lt;h3&gt;：年代別売上表、購入方法</b>
                           </p>
                       </li>
                   </ol>
                <br>
                <b class="error-message">【解説】</b><br><br>
                <p>
                    ※ソースコードは解答用の教材ファイルを参照してください。<br><br>
                    見出しタグは&lt;h1&gt;～&lt;h6&gt;まであり、数字が低くなる程重要性が高くなります。<br>SEOとしても重要視されているので、使い方を間違えないようにしましょう。<br>
                    基本的に、&lt;h1&gt;タグは1ページに1つとし、記事のテーマとなるキーワードを入れるケースがほとんどです。<br>&lt;h2&gt;タグ以降は1ページに複数利用してもOKですが、数字が大きくなる程、使う数が増えていくというイメージです。<br>使う順番もとても重要で、数字が大きいタグの中に数字が小さいタグがあったりしないように気をつけましょう。
                </p>
            </div>
            
            <div class="box-child__content"> 
               <h4><span>課題4.</span>記事の作成</h4>
               <P>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、中見出し内に&lt;img&gt;と&lt;p&gt;を追加して、ページを完成させてください。
               </P>
                <br>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>：【画像】：html/img/img1.jpg</b>
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>：【記事】：</b>
                           </p>
                       </li>
                   </ol>
               <P>    
                   <b>
                       「吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで初めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々をつかまえて煮にて食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。」
                   </b>
               </P><br>
                   <b class="error-message">【解説】</b><br>
                <br>
                <p>
                    ※ソースコードは解答用の教材ファイルを参照してください。
                </p>
                <br>
                <br>
                    <ol class="list">
                        <li class="list">
                            <p>
                                <b>&lt;img src="<font color="#99CCFF">表示させる画像のファイルパス</font>"&gt;</b>
                            </p>
                        </li>
                        <p>
                            画像を表示する為のファイルパスをsrc属性で記述します。<br>その他音楽や動画などのファイルパスを指定する時にもsrc属性が使われます。<br>その他画像の縦横サイズなども属性で設定する事ができますが、基本的にはCSSで指定するようにします。
                        </p>
                        <li class="list">
                            <p>
                                <b>&lt;p&gt;</b>
                            </p>
                        </li>
                        <p>
                            &lt;p&gt;タグは基本的に文章用で使用します。<br>文章内で改行したい場合などは&lt;br&gt;を使って改行する事もできます。
                        </p>
                    </ol>
            </div>
            
            <div class="box-child__content">
               <h4><span>課題5.</span>表の作成</h4>
               <p>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、小見出し（年代別売上表）に&lt;table&gt;を作成し、表を完成させてください。
                   <br>
                   ※CSS を設定していない為、枠線などは表示されません。
               </p>
                <br>
                       
               <table class="detail2_table">
                 <tr>
                     <th></th>
                     <th class="year">2016年</th>
                     <th class="year">2017年</th>
                     <th class="year">2018年</th>
                     <th class="year">2019年</th>
                 </tr>
                 <tr>
                     <th>10～20代</th>
                     <td>380</td>
                     <td>2300</td>
                     <td>5300</td>
                     <td>15000</td>
                 </tr>
                 <tr>
                     <th>30～40代</th>
                     <td>1</td>
                     <td>100</td>
                     <td>300</td>
                     <td>1000</td>
                 </tr>
                 <tr>
                     <th>50～60代</th>
                     <td>25</td>
                     <td>10</td>
                     <td>1000</td>
                     <td>20000</td>
                 </tr>
               </table>
               <br><br>
               <b class="error-message">【解説】</b><br>
               <p><br>
                   ※ソースコードは解答用の教材ファイルを参照してください。
               </p><br>
                <p>
                   最近はレスポンシブ（後で学習します）概念がでてきてから使用される事が少なくなってきた印象の&lt;table&gt;タグですが、表の作成などではまだまだ手番があると思います。<br>
                   &lt;thead&gt;、&lt;tbody&gt;などでヘッダーとコンテンツ部分をしっかりと分けた作りを心掛けるようにしましょう。
               </p>
           </div>
            
           <div class="box-child__content">
               <h4><span>課題6.</span>リストの作成</h4>
               <p>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、小見出し（購入方法）に&lt;ul&gt;、&lt;li&gt;を作成し、購入先リストを完成させてください。
               </p><br>
               
               <ol class="list">
                   <li class="list"><p><b>リスト 1：Amazon</b></p></li>
                   <li class="list"><p><b>リスト 2：Yahoo</b></p></li>
                   <li class="list"><p><b>リスト 3：Google</b></p></li>
               </ol>
               <br>
               <br>
               <b class="error-message">【解説】</b><br><br>
               <p>
                   ※ソースコードは解答用の教材ファイルを参照してください。<br><br>
                   &lt;ul&gt;、&lt;li&gt;のセットはどのWebページでも必ず使用されていると思います。<br>今回のようなシンプルなリストに限らず、ヘッダーメニュー、サイドメニューなどもこれらのタグを使い、CSSで装飾するというのが一般的な流れです。
               </p>
           </div>
           
           <div class="box-child__content">
               <h4><span>課題7.</span>リンクの作成</h4>
               <p>
                   <b>「index.html」</b>に下記の画像と情報を参考にして、小見出し（購入方法）作成したリストに対して&lt;a&gt;タグを作成し、リンクを完成してください。
               </p><br>
               
               <ol class="list">
                   <li class="list">
                       <p>
                       <b><a href="https://amazon.co.jp" target="blank">amazon：https://amazon.co.jp</a></b>
                       </p>
                   </li>
                   <li class="list">
                       <p>
                       <b><a href="https://google.co.jp" target="blank">Google：https://google.co.jp</a></b>
                       </p>
                   </li>
                   <li class="list">
                       <p>
                           <b><a href="https://yahoo.co.jp" target="blank">Yahoo：https://yahoo.co.jp</a></b>
                       </p>
                   </li>
               </ol>
               <br>
               <br>
               <br>
               <b class="error-message">【解説】</b><br><br>
               <p>
                   ※ソースコードは解答用の教材ファイルを参照してください。
               </p><br>
               <ol class="list">
                   <li class="list">
                       <a>
                           <b>&lt;a href="<font color="#99CCFF">リンク先URL</font>"&gt;</b>
                       </a>
                   </li>
               </ol>
               <br>
               <p>
                   アンカーとして使用される&lt;a&gt;タグに、リンク先URLをhref属性で記述します。<br>リンク先以外にも新しいタブで開くなどが設定できるtarget属性などもあります。
               </p>
           </div>
    </div>
</div>