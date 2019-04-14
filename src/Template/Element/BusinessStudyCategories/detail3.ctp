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
.tab_content, .error-message ,.list {
    line-height: 1.8;
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
        <!-- 学習用 -->
        <div id="study_content">
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_categories__id']?>.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">-->
        <div class="box-child__content bcolor">
                <span class="point"><b>- 学習 POINT -</b></span><br><br>
                <p>
                    この課題では、一般的な電卓機能をWebアプリケーションとして制作していきます。<br>教材として用意されている電卓の画面に JavaScriptで電卓機能を追加し、アプリケーションを完成させます。
                <br><br>
                <b class="error-message">
                 課題用の教材に今回使用するファイルが用意されていますので、ダウンロードして課題に取り組んでください。</b>
                </p>
             <br>
             <b>【教材ファイル内】</b><br><br>
                <p>
                    / <b class="error-message">index.html</b>・・・・・・・・・・電卓アプリ表示ファイル ※JavaScriptの記述方法によってはこのファイルにも記述する必要があります。<br>
                    / css / reset.css　・・・・・・・ブラウザ間の違いを吸収する為のcssファイル。変更の必要なし。<br>
                    / css / style.css&nbsp;&nbsp;&nbsp;&nbsp;・・・・・・・表示ファイルのデザインを記述する為のcssファイル。変更の必要なし。<br>
                    / img / app_back.jpg ・・・・・・アプリの背景画像。変更の必要なし。<br>
                    / js / <b class="error-message">app.js</b> ・・・・・・・・・・JavaScriptを記述する為のファイル。このファイルに処理を記述します。
                </p><br><br>
                <p>
                 ダウンロード後、「index.html」をブラウザで開くと今回課題の電卓アプリが表示されます。
                </p>
            </div>
            
            <div class="box-child__content bcolor">
                <h4><span>概要1.</span>アプリケーション仕様</h4>
                
                <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyCategories/id_3/img2.png');?>" alt="img2" style="width:70%;">
                </div>
                <br>
                <br>
                <p>
                    一般的な電卓機能を持つWebアプリケーションです。<br>
                    下は今回制作する電卓アプリの機能について説明しています。<br>この情報を参考にしながらjsで処理を記述し、Webアプリケーションを完成させていきます。
                </p>
                <ul>
                    <li class="list"><b>計算式エリア</b></li>
                        <p>
                            イコール（＝）が押されるまでの計算式を記録します。<br>
                            表示されるタイミングは、入力キーの四則演算子（＋、－、×、÷）が入力された時で、数値エリアに値が入力されていない時は、四則演算子を入力しても処理を行わないように制御します。<br>
                            イコール（＝）が押されたらこのエリアを初期状態（空）に戻します。
                       </p>
                    <li class="list"><b>数値エリア</b></li>
                        <p>
                            入力された数値を新規で表示、すでに表示されている値があれば後に追加します。<br>
                            16桁以上は入力できないように制御します。<br>
                            入力キー「00」は、数値の先頭には使用できないよう制御します。（001234などは不可）<br>
                            入力キー「 . 」は、数値の先頭には使用できないよう制御します。（.12345などは不可）<br>
                            入力キー「 . 」は、数値内に2回使用できないように制御します。（1.234.5などは不可）<br>
                        </p>
                    <li class="list"><b>メモリキー（MC、M+、M-、MS）</b></li>
                        <p>
                            ここでは使用しません。
                        </p>
                    <li class="list"><b>メモリ保存エリア</b></li>
                        <p>
                            ここでは使用しません。
                        </p>
                    <li class="list"><b>入力キー</b></li>
                        <p>
                            「AC」・・・計算式エリア、数値エリア両方の値を削除します。<br>
                            「C」・・・数値エリアの値を削除します。<br>
                            「BACK」・・・数値エリアから最新 1 文字（右側 1 文字）を削除します。<br>
                            「1」・・・数値エリアに 1 を追加します。<br>
                            「2」・・・数値エリアに 2 を追加します。<br>
                            「3」・・・数値エリアに 3 を追加します。<br>
                            「4」・・・数値エリアに 4 を追加します。<br>
                            「5」・・・数値エリアに 5 を追加します。<br>
                            「6」・・・数値エリアに 6 を追加します。<br>
                            「7」・・・数値エリアに 7 を追加します。<br>
                            「8」・・・数値エリアに 8 を追加します。<br>
                            「9」・・・数値エリアに 9 を追加します。<br>
                            「0」・・・数値エリアに 0 を追加します。<br>
                            「 . 」が付く時以外は先頭には使用できません。（0.1 など以外は不可）<br>
                            「00」・・・数値エリアに 00 を追加します。数値の先頭には使用できません。<br>（001234 などは不可）<br>
                            「 . 」・・・数値エリアに . を追加します。数値の先頭には使用できません。<br>（.12345 などは不可）数値内に 2 回使用できません。（1.234.5 などは不可）<br>
                            「＋」・・・数値エリアの値と＋を計算式エリアに追加します。追加後は数値エリアを空にします。<br>
                            「－」・・・数値エリアの値と－を計算式エリアに追加します。追加後は数値エリアを空にします。<br>
                            「×」・・・数値エリアの値と×を計算式エリアに追加します。追加後は数値エリアを空にします。<br>
                            「÷」・・・数値エリアの値と÷を計算式エリアに追加します。追加後は数値エリアを空にします。<br>
                            「=」・・・計算式エリアの式を計算し、数値エリアに答えを表示します。表示後は計算式エリアを空にします。
                        </p>
                </ul>
            </div>
            
            
            <div class="box-child__content bcolor">
                <h4><span>概要2.</span>提出ファイルについて</h4>
                
                <p>
                    学習が終わった場合、もしくは途中評価をしてほしい場合は、学習コンテンツ一覧画面の学習した課題のアップロードボタンから
                    ファイルを提出してください。
                </p>
                <p>
                    【ファイル名　】 L2_calapp_ユーザー名<br>
                    【ファイル形式】 zip<br>
                    【ファイル内容】 ダウンロードした教材ファイルを全て含めてzipに圧縮してください。
                </p>


            </div>
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>