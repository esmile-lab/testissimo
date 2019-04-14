<style>
    .bcolor {
        margin-bottom:40px;
    }
    .bcolor h4 {
        border-left: 5px solid #ef6ebf;
    }
    .bcolor h4 span {
        color: #ef6ebf;
    }
    .point {
        font-size: 130%;
    }
    
    .tab_content ,.list {
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
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_categories__id']?>.pdf" type="application/pdf" style="width:90%; height:1000px; border: none;">-->
            <div class="box-child__content bcolor">
                <span class="point"><b>- 学習 POINT -</b></span><br><br>
                <p>
                    この課題では、実際にダミー会社のHPを制作していきます。<br>
                    現在主流の画面遷移が無い縦スクロール型にしているので、ファイル数も少なくシンプルな作りになっています。<br>
                    初めてWebサイトを作る人はやや難しい所もあるかもしれませんが、1つ1つレベルを上げながら進めていけば大丈夫です。<br>
                    サイトが完成する頃には、普段見ている他のWebサイトがどのような構成で作られているか多少イメージできるようになっているはずで
                    す。
                <br><br>
                <b class="error-message">
                 課題用の教材に今回使用するファイルが用意されていますので、ダウンロードして課題に取り組んでください。</b>
                </p>
             <br>
             <b>【教材ファイル内】</b><br><br>
                <p>
                    / <b class="error-message">index.html</b>・・・・・・・・・・サイト表示ファイル。このファイルに表示コンテンツを記述します。<br>
                    / css / reset.css　・・・・・・・ブラウザ間の違いを吸収する為のcssファイル。変更の必要なし。<br>
                    / css / style.css&nbsp;&nbsp;&nbsp;&nbsp;・・・・・・・表示ファイルのデザインを記述する為のcssファイル。このファイルにデザインを記述します。<br>
                    / img / bg / top_bg.jpg ・・・・・Topページの背景画像。変更の必要なし。<br>
                    　　　　　　service_bg.jpg&nbsp;・・・Serviceページの背景画像。変更の必要なし。<br>
                    　　　　　　contact_bg.jpg・・・Contact ページの背景画像。変更の必要なし。<br>
                    / js / <b class="error-message">app.js</b> ・・・・・・・・・・JavaScriptを記述する為のファイル。このファイルに処理を記述します。
                </p>
                <p>
                 ダウンロード後、「index.html」をブラウザで開くと今回課題の電卓アプリが表示されます。
                </p>
            </div>   
             
            <div class="box-child__content bcolor">
                <h4><span>概要1.</span>サイト仕様</h4>
                <ul>
                    <li class="list">Top</li>
                        <p>Topページです。</p>
                    <li class="list">About</li>
                        <p>事業内容を説明しているページです。</p>
                    <li class="list">Service</li>
                        <p>サービスの流れを説明しているページです。</p>
                    <li class="list">Company</li>
                        <p>会社概要ページです。</p>
                    <li class="list">Contact</li>
                </ul>
                
                <p>
                    以上、全5ページ構成になっていますが、画面遷移は無く縦スクロール型のWebページになっています。
                </p>
                <p>
                    各ページのテキストなどは自由に変えてもらって良いので、あなたがこれから作成しようと思っているWebサイトをイメージして制作してみましょう。
                </p>
            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要2.</span>ヘッダー</h4>
                <ul>
                    <li class="list">Top</li>
                        <p>Topページです。</p>
                    <li class="list">About</li>
                        <p>事業内容を説明しているページです。</p>
                    <li class="list">Service</li>
                        <p>サービスの流れを説明しているページです。</p>
                    <li class="list">Company</li>
                        <p>会社概要ページです。</p>
                    <li class="list">Contact</li>
                </ul>
                
                <p>
                    会社ロゴを左寄せ、ページメニューを右寄せで表示しています。<br>ヘッダー部分は画面固定で常に最上部に表示されます。<br>各メニューをクリックすると、アンカー先のページにスクロールします。
                </p>
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_2/img7.png');?>" alt="img7" style="width:100%;">
                </div>
                <br>
                <br>

            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要3.</span>Topページ</h4>
                
                <p>
                    背景画像をつけて、中央付近にキャッチコピーと会社名を表示しています。
                </p>
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_2/img1.png');?>" alt="img1" style="width:100%;">
                </div>
                <br>
                <br>

            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要4.</span>Aboutページ</h4>
                
                <p>
                    左から事業内容テキスト、エンジニアカテゴリ3つを並べて表示しています。
                </p>
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_2/img2.png');?>" alt="img2" style="width:100%;">
                </div>
                <br>
                <br>

            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要5.</span>Serviceページ</h4>
                
                <p>
                    背景画像をつけて、サービスフロー3つ、矢印2つを並べて表示しています。
                </p>
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_2/img3.png');?>" alt="img3" style="width:100%;">
                </div>
                <br>
                <br>

            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要6.</span>Companyページ</h4>
                
                <p>
                    会社概要、会社地図（GoogleMap）を並べて表示しています。
                </p>
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_2/img4.png');?>" alt="img4" style="width:100%;">
                </div>
                <br>
                <br>

            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要7.</span>Contactページ</h4>
                
                <p>
                    背景画像をつけて、「件名」、「お名前」、「メールアドレス」、「コメント」の4項目と「送信する」ボタンを縦並びに表示しています。<br>※お問い合せ機能は実装せず、表示部分のみを作成します。
                </p>
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_2/img5.png');?>" alt="img5" style="width:100%;">
                </div>
                <br>
                <br>

            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要8.</span>フッター</h4>
                
                <p>
                    会社ロゴ、ページメニュー、「トップへ戻る」ボタンを横並びで表示しています。<br>ページメニューを中央寄せにします。<br>各メニューをクリックすると、アンカー先のページにスクロールします。<br>「トップへ戻る」ボタンをクリックすると、Topページにスクロールします。
                </p>
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_2/img6.png');?>" alt="img6" style="width:100%;">
                </div>
                <br>
                <br>

            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要9.</span>提出ファイルについて</h4>
                
                <p>
                    学習が終わった場合、もしくは途中評価をしてほしい場合は、学習コンテンツ一覧画面の学習した課題のアップロードボタンから
                    ファイルを提出してください。
                </p>
                <p>
                    【ファイル名　】 L2_comsite_ユーザー名<br>
                    【ファイル形式】 zip<br>
                    【ファイル内容】 ダウンロードした教材ファイルを全て含めてzipに圧縮してください。
                </p>


            </div>
        </div>
    </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
</div>