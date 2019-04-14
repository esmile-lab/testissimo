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
                    電卓の削除機能であるクリアキー部分を作成します。
                </p>
                <p>
                    クリアキーが押された時のイベント取得から表示部分の削除までをjsで記述していきます。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>機能説明</h4>
                <p>
                    下が今回作成する機能部分です。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_3/img5.png');?>" alt="img4" style="width:70%;">
                    </div>
                <br>
                
                <p>
                    削除用のキーが押されたら、表示エリア部分の削除を行います。<br>下が削除用キー一覧です。
                </p>
                <p>
                    「AC」・・・・計算式の表示エリア、数値の表示エリア両方の値を削除します。<br>
                    「C」・・・・・数値の表示エリアの値を削除します。<br>
                    「BACK」・・・数値の表示エリアから、最後に入力された1文字（右側1文字）を削除します。<br>
                </p>
                <p>
                    削除用キーに関しては、特に入力制御をする必要はありません。<br>仕様に従って削除機能を実装してください。
                </p>
                
            </div> 
            <div class="box-child__content">
                <h4><span>課題2.</span>イベント機能</h4>
                <p>
                    削除用キーが押された時のイベントを取得します。
                </p>
                <p>
                    イベントの取得方法は、前回の課題で説明してあるので省きます。<br>
                    繰り返しになりますが、取得方法の指定はありません。<br>今まで自分が書いた事がある、もしくはできそうだと思うやり方で良いです。
                    <br>自由な発想を持ってイベントの取得に取り組んでみてください。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題3.</span>削除機能</h4>
                <p>
                    イベントを取得できたら、入力されたキーによって数値の表示エリア、または計算式の表示エリアの値を削除します。<br>
                    イベント処理用に作った共通関数に取得、削除部分のロジックを追加していきましょう。
                </p>
                <ol>
                    <li>
                        <p>
                            イベントハンドラ、イベントリスナーで削除用キーのタグ内にあるvalue属性値を取得取得した値を元に削除処理を振り分けます。
                        </p>
                    </li>
                    <li>
                        <p>
                            削除対象となる表示エリア部分の要素を取得します。
                        </p>
                    </li>
                    <li>
                        <p>
                            表示エリア部分のエレメントに対し、入力キーの条件に従って削除処理を追加します。<br>「AC」、「C」に関しては、テキストエリアの値を空にすれば良いです。<br>
                            「BACK」に関しては、最後に入力された1文字（右側1文字）を削除しなければならないので、slice()などを使用して最後の数字だけが削除されるようにします。
                        </p>
                    </li>
                </ol>
                        <p>
                            ここまでの工程で、3パターンの削除機能が出来上がったと思います。<br>実際に削除用キーをクリックして、正しく動作しているか確認してみましょう。
                        </p>
                   
            </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>