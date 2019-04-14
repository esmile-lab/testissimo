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
                    サービスの流れを紹介するServiceページを作成していきます。
                </p>
                <p>
                    ここでは、背景の設定やボックスの並べ方など、今まで作成してきたページを流用してコーディングする事ができます。<br>基本的には前回までの応用になりますが、新しく絵文字を使う所があるので、絵文字用CSSファイルの読込みが必要になります。<br>様々な種類の絵文字があり、画像を用意する必要がない為、使い勝手も良いのが特長です。<br>今後のサイト制作でも役に立つと思いますので、覚えておきましょう。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>Aboutページ作成</h4>
                <p>
                    下がページのイメージです。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img3.png');?>" alt="img4" style="width:100%;">
                    </div>
                <br>
                <br>
                
                <p>
                    ページ内のレイアウトはヘッダー、コンテンツの2つのボックスを作成します。
                </p>
                <p>
                    ヘッダー部分にはメニューのタイトルを表示しています。<br>タイトルのフォントや配置を設定してください。
                </p>
                <p>
                    Serviceページ部分のフレームに背景画像（img/bg/service_bg.jpg）をつけます。<br>ページ内のレイアウトはヘッダー、コンテンツの2つのボックスを作成します。<br>レイアウトはAboutページと同じなので省きます。<br>コンテンツ部分には申込みフロー用ボックス3つと矢印2つのボックスを横並びで表示します。<br>並べ方もAboutページと同じなので省きます。<br>申込みフロー用ボックス3つに絵文字を使用するので、まずは絵文字を使う為にCSSファイルのリンクを貼ります。<br>下のリンクをHTMLファイルに記述してください。
                </p>
<pre class="lang-html prettyprint">
&lt;link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"&gt; 
</pre>
                
                <p>今回は「Font Awesome」というcssを使用しています。<br>無償版でも色々な種類の絵文字をする事ができます。<br>
                    <a href="https://fontawesome.com/icons?d=gallery" target=" blank">https://fontawesome.com/icons?d=gallery</a><br>上のURLに使用できる絵文字が載っています。
                </p>
                
                <p>
                <p>
                    【Step.1】
                </p>
<pre class="lang-html prettyprint">
&lt;i class="fa fa-envelope"&gt;&lt;/i&gt;
</pre>
                
                <p>
                    【Step.2】
                </p>
<pre class="lang-html prettyprint">
&lt;i class="fa fa-users"&gt;&lt;/i&gt;
</pre>
                
                <p>
                    【Step.3】
                </p>
<pre class="lang-html prettyprint">
&lt;i class="fa fa-handshake"&gt;&lt;/i&gt;
</pre>

                <p>
                    ページの見本では上の3つの絵文字を使用しています。<br>
                    各申込みフロー用ボックスは固定幅で設定し、ボックスの内のテキスト群もレイアウトが崩れないように固定で表示されるようにしましょう。
                </p>
                
            </div>  
        </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>