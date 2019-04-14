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
    .tab_content, .error-message ,.list {
        line-height: 1.8;
    }
    .imgcenter{
        padding-left: 15px;
    }
</style>

<div>
    <div class="tabs">
        <!-- 学習用 -->
        <div id="study_content">
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">-->
            
            <div class="box-child__content bcolor">
                <h4><span>概要1.</span>学習POINT</h4>
                <p>
                    まずは、Web サイトの土台となるレイアウトを作成していきます。
                </p>
                <p>
                    サイト作成は、大まかな順番につけると、全体のデザインイメージ、ページ数をどれくらいにするか、各ページにどのようなコンテンツ
                    を表示するか、の順番に設計していきます。<br>全体から詳細に向かってイメージを作っていく事で、戻り作業が少なくなるのです。<br>
                    今回は課題という事で、すでにイメージが出来上がっていますが、詳細部分から作り始めてしまうと、全体で見た時に後々イメージが変わって結局詳細部分に手直しが入るというのはよくある話です。<br>
                    コーディング時も、まずは全体フレームの作成から始める事で、ヘッダーやフッターなど、共通化できる部分が見えてきます。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>レイアウト（HTML）作成</h4>
                <p>
                    まずは、サイトの土台となる枠組みを作っていきます。<br>index.htmlに以下の順番でサイト全体のフレームを作成してください。
                </p>
                <br>
                    <ol class="list">
                        <li class="list">
                            <p>
                                全体をラップするdivタグ
                            </p>
                        </li>
                        <li>
                            <p>
                                ヘッダーコンテンツを表示するheaderタグ
                            </p>
                        <li>
                            <p>
                                各ページのコンテンツを表示するsection（divタグでも可）タグ、5ページ分
                            </p>
                        </li>
                        <li>
                            <p>
                                フッターコンテンツを表示するfooterタグ
                            </p>
                        </li>
                    </ol>
            </div>  
            
            <div class="box-child__content">
                <h4><span>課題2.</span>レイアウト（CSS）作成</h4>
                <p>
                    index.htmlに必要なCSSファイルのリンクを貼り、CSSコーディングの準備をしていきます。<br>以下の順番で課題を進めてください。
                </p>
                <br>
                    <ol class="list">
                        <li class="list">
                            <p>
                                index.htmlにcss/reset.cssのリンク
                            </p>
                            <p>
                                reset.cssとは、ブラウザごとの表示の違いをリセットしてくれるcssです。<br>reset.cssを適用する事でブラウザごとにcssの記述をしなくても良くなる為、コーディングを効率化できます。
                            </p>
                        </li>
                        <li>
                            <p>
                                index.htmlにcss/style.cssのリンク
                            </p>
                            <p>
                                これからcssを記述していく為のCSSファイルです。
                            </p>
                        <li>
                            <p>
                                Google Web Fontのリンク
                            </p>
                            <p>
                                今回の課題では、学習も兼ねてGoogleが提供しているWebフォントを使用したいと思います。<br>Muliというアルファベット用のフォントです。<br>下のコードをそのまま書いてcssリンクを貼りましょう。
                            </p>
 <pre class="lang-html prettyprint">
&lt;link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,700,700i" rel="stylesheet"&gt; 
</pre>
                        </li>
                        <li>
                            <p>
                                課題1で作成したhtmlタグにcssの実装
                            </p>
                            <p>
                                細部までイメージができていれば、フレーム内全てのタグに対してcssを適用しても良いですし、コンテンツ部分は実際にコーディングをしながらcssを書きたいという人は、全体をラップしているタグだけcssを記述しておきましょう。<br>レスポンシブ対応を意識した横幅設定ができるとさらに良いです。
                            </p>
                        </li>
                    </ol>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題3.</span>ヘッダー作成</h4>
                <p>
                    今回制作するサイトは、ヘッダーが各ページに表示される仕様になっているので、共通部分として最初に作成します。<br>
                    下がヘッダーのイメージです。<br>※赤枠は仕様ではありません。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img7.png');?>" alt="img4" style="width:100%;">
                    </div>
                <br>
                <p>
                    ヘッダーの高さは80～100px程度を想定しています。<br>ヘッダー内は会社ロゴを左寄せ、ページメニューを右寄せで表示しています。<br>ヘッダー自体は画面固定で、下にスクロールしても常に最上部に表示されるように作成します。<br>左側の会社ロゴは文字列です。<br>先頭の「W」と「P」はインラインタグを使って色を変えています。<br>右側の各メニューには、クリックした時にアンカー先のページにスクロールするリンクを貼ります。<br>メニュー部分のレスポンシブ対応は今後の課題で実装しますが、レスポンシブ対応を意識した横幅設定ができるとさらに良いです。</p>
                
            </div>    
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>