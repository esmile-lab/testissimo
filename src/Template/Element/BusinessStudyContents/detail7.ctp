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
    .tab_content .error-message .list {
        line-height: 1.8px;
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
                   事業内容を紹介するAboutページを作成していきます。
                </p>
                <p>
                    ここでは、記事のフォントやレイアウト設定、ボックスの並べ方などのコーディング力が求められます。<br>前回よりもコンテンツの量が増え、コンテンツ内のレイアウトも作っていかなければいけないので難易度は高くなりますが、このページが完成すれば、これ以降のページはこのコードを流用できる部分も多くなります。<br>その分ここでしっかり作っておかないと後々多くのページを修正しなければならないなんて事も起きてしまいますので、雛形としてしっかりと作成していきましょう。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>Aboutページ作成</h4>
                <p>
                    下がページのイメージです。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img2.png');?>" alt="img4" style="width:100%;">
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
                    コンテンツ部分には左から事業内容テキスト、エンジニアカテゴリ3つの合計4つのボックスを横並びで表示しています。<br>
                    ボックスを横に並べるには、「float」プロパティを使用する方法や、「display」プロパティに「inline-block」、「flex」を使用するなどいくつか方法あります。<br>ここでは特に指定しないので自分が調べたcssプロパティでレイアウトを作成してください。<br>
                    各エンジニアカテゴリのボックスは固定幅で設定し、ボックスの内のテキスト群もレイアウトが崩れないように固定で表示されるようにしましょう。
                </p>
            </div>  
        </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>