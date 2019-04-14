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
                    会社概要を紹介するCompanyページを作成していきます。
                </p>
                <p>
                    コンテンツのレイアウトは今までと同じですが、htmlファイルの読込み（地図）などのコーディングが新しく求められます。<br>
                    地図の表示は、アプリなどでもよく使用されているので目にする機会が多いと思いますが、どのようにして指定場所が表示されているかなどが今回の課題で多少仕組みがわかると思います。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>Aboutページ作成</h4>
                <p>
                    下がページのイメージです。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img4.png');?>" alt="img4" style="width:100%;">
                    </div>
                <br>
                <br>
                
                <p>
                    ページ内のレイアウトはヘッダー、コンテンツの2つのボックスを作成します。
                </p>
                <p>
                    レイアウトはAboutページと同じなので省きます。
                    コンテンツ部分には会社概要、会社地図2つのボックスを横並びで表示します。<br>並べ方もAboutページと同じなので省きます。<br>会社地図には GoogleMapをiframeタグで表示しています。<br>iframe(アイフレーム)タグは、html内に、別のhtmlファイルを表示させる事ができます。<br>ここではGoogleMapから指定場所の座標が載っているURLをコピーし、src属性に入れる事で地図を読み込んでいます。<br>その他の属性としてサイズの指定などもできます。</p>
                
<pre class="lang-html prettyprint">
&lt;iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.9479610725252!2d139.73181395113662!3d35.70289818009
199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c57ad3f31e9%3A0x755f73c203a3e0c6!2z44CSMTYyLTA4MDUg5p2x
5Lqs6YO95paw5a6_5Yy655-i5p2l55S677yR77yQ77yS4oiS77yXIOiSvOm3ueekvuODk-ODqw!5e0!3m2!1sja!2sjp!4v1534133967071"
width="600" height="450" frameborder="0" style="border:0" allowfullscreen&gt;
&lt;/iframe&gt;
</pre>
                    <p>
                        ページの見本では、このURLをGoogleMapから取得していますが、表示する場所は任意でかまいません。<br>URLの取得方法は、GoogleMapで指定場所を表示した状態で「共有」→「地図を埋め込む」で指定場所の地図を埋め込む事ができます。
                    </p>
                
            </div>  
        </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>