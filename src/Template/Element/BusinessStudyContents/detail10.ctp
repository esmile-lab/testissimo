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
                   問合せ用のContactページと最下部のフッターを作成していきます。
                </p>
                <p>
                    コンテンツのレイアウトは今までと同じですが、入力用ボックスや送信ボタンなど、ユーザー操作の基本部分のコーディング力が求められます。<br>この課題では、送信後の処理は行いませんが、お問い合せ機能はどのWebサイトでも実装されているメジャーな機能なので、ここで基本の作り方を覚えておきましょう。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>Aboutページ作成</h4>
                <p>
                    下がページのイメージです。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img5.png');?>" alt="img4" style="width:100%;">
                    </div>
                <br>
                <br>
                
                <p>
                    Contact ページ部分のフレームに背景画像（img/bg/contact_bg.jpg）をつけます。<br>ページ内のレイアウトはヘッダー、コンテンツの2つのボックスを作成します。<br>コンテンツ部分には入力フォームの各項目をブロックで縦並びにしていますが、項目のタイトルと入力ボックスは横並びで表示させます。<br>入力フォーム全体をformタグで囲うようにしてください<br>入力用のタグは以下を使用しています。
                </p>
                
                <p>【件名】</p>
                
<pre class="lang-html prettyprint">
&lt;input type="text" /&gt;
</pre>           
                <p>【お名前】</p>
<pre class="lang-html prettyprint">
&lt;input type="text" /&gt; 
</pre>      
                <p>【メールアドレス】</p>
<pre class="lang-html prettyprint">
&lt;input type="text" /&gt; 
</pre>     
                <p>【コメント】</p>
<pre class="lang-html prettyprint">
&lt;textarea&gt;&lt;/textarea&gt; 
</pre>          
                <p>【送信する】</p>
<pre class="lang-html prettyprint">
&lt;input type=”button” /&gt; 
</pre>                  
                <p>
                    ※お問い合せ機能は実装せず、表示部分のみを作成します。
                </p>
                
            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要2.</span>フッター作成</h4>
                <p>
                   最下部がフッターのイメージです。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img6.png');?>" alt="img4" style="width:100%;">
                    </div>
                <br>
                
                <p>
                    フッターの高さは80～100px程度を想定しています。<br>
                    フッター内は会社ロゴを左寄せ、ページメニューを中央寄せ、「トップへ戻る」ボタンを右寄せで表示しています。<br>
                    左側の会社ロゴは文字列です。<br>先頭の「W」と「P」はインラインタグを使って色を変えています。<br>
                    中央の各メニューには、クリックした時にアンカー先のページにスクロールするリンクを貼ります。<br>右側の「トップへ戻るボタン」は、クリックした時に一番上にスクロールします。
                </p>
        </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>