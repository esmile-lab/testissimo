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
                    レベル6でWebサイトの静的ページ部分が完成しました。<br>ここでは、JavaScript（js）を使って、ページ移動時にスムーズなスクロールを付けてみたいと思います。<br>機能自体はあまり複雑な課題ではありませんが、イベントの取得やDOM操作など、基本部分を実戦に取り入れる事で、jsの役割を少しでも理解してもらえればと思います。<br>基礎学習で学んだと思いますが、jsはユーザー操作を処理し、ページのデザインを変えたり、データの計算、加工など様々な事ができます。<br>今後の課題ではより複雑なjsのコーディングスキルが求められていきますので、１つ１つ理解しながら課題に取り組んでみましょう。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>機能作成</h4>
                <p>
                    下がページのイメージです。
                </p>
                <div class="imgcenter">
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img8.png');?>" alt="img4" style="width:100%;">
                <br><br>
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_2/img9.png');?>" alt="img4" style="width:100%;">
                </div>
                <br>
                <p>
                    ヘッダーとフッターの各メニュー、「トップへ戻る」ボタンをクリックした時のイベントハンドラをindex.htmlに書く、もしくはイベントが発生するタグにid属性などを付け、app.js にイベントリスナーを書いてユーザーのイベントを取得できるようにします。<br>どちらの作りであってもイベントが発生した時に、画面スクロール用の関数が呼び出します。<br>画面スクロール用の関数では、どのページに移動するかの情報を引数で渡しておく必要があります。<br>画面スクロール用に提供されているjsの関数として、「scrollIntoView」という関数がありますので、この関数を使用しましょう。<br>※jQueryを使用すると、よりきれいで正確なスクロールが実装できますが、ここでは使用しません。
                </p>
                
            </div>  
        </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>