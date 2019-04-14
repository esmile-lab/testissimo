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
                    Topページを作成していきます。
                </p>
                <p>
                    ここでは、背景の設定やコンテンツの配置などのコーディング力が求められます。<br>ユーザーに一番多く見られる重要なページになります。<br>このページでどのようなインパクトを与えられるかで、ユーザーがそのサイトを離れてしまうか、継続して次のページを見てもらえるか変わってくる事も大いにあります。<br>ある意味Webサイト作成の肝になる部分かもしれません。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>Topページ作成</h4>
                <p>
                    下がページのイメージです。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img1.png');?>" alt="img4" style="width:100%;">
                    </div>
                <br>
                <br>
                
                <p>
                    Topページ部分のフレームに背景画像（img/bg/top_bg.jpg）をつけます。<br>ウインドウのサイズによって画像がリピートしないように注意し、一枚の画像が中心に表示されるように設定してください。
                </p>
                <p>
                    キャッチコピー用のボックスを作成し、中央付近にくるよう高さと横幅を設定します。<br>会社のロゴはヘッダー部分と同じく、
                    文字列にcssを適用して表示します。
                </p>

            </div>  
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>