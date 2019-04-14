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
                    画面に計算式の答えを出力する機能を作成します。<br>
                    キーが押された時のイベント取得、演算、画面表示までをjsで記述していきます。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>機能説明</h4>
                <p>
                    下が今回作成する機能部分です。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_3/img6.png');?>" alt="img4" style="width:70%;">
                    </div>
                <br>
                
                <p>
                    「＝」のキーが押されたら、表示エリア部分の取得、表示を行います。<br>下が入力用キー一覧です。
                <br>
                    「=」・・・計算式エリアの式を計算し、数値エリアに答えを表示します。表示後は計算式エリアを空にします。
                </p>
                <p>
                    基本的には入力された数値をそのまま追加していけば良いのですが、アプリケーションの仕様に従って入力制御をしなければいけない所がいくつかあります。
                </p>
                <p>
                    ・数値の表示エリアが空の状態で「＝」が押された時は、直前の演算子を削除して計算する。
                </p>
                
            </div> 
            <div class="box-child__content">
                <h4><span>課題2.</span>イベント機能</h4>
                <p>
                    計算結果用のキーが押された時のイベントを取得します。<br>
                    イベントの取得方法は、前回の課題で説明してあるので省きます。<br>
                    繰り返しになりますが、取得方法の指定はありません。<br>今まで自分が書いた事がある、もしくはできそうだと思うやり方で良いです。
                    <br>自由な発想を持ってイベントの取得に取り組んでみてください。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題3.</span>演算機能</h4>
                <p>
                    イベントを取得できたら、計算結果を表示します。<br>
                    イベント処理用に作った共通関数に取得、演算、表示部分のロジックを追加していきましょう。
                </p>
                <ol>
                    <li>
                        <p>
                            計算結果用キーのタグ内にあるvalue属性を取得し、この値を元に処理を振り分けます。
                        </p>
                    </li>
                    <p>
                        イベントハンドラ、イベントリスナーでvalue属性値を取得
                    </p>
                    <li>
                        <p>
                            各表示エリア部分のエレメントを取得
                        </p>
                    </li>
                    <p>
                        計算式に「×」と「÷」が入っている場合は、計算式には使用できない為置換します。
                    </p>
                    <li>
                        <p>
                            計算式内の「×」を「*」、「÷」を「/」に置換
                        </p>
                    </li>
                    <p>
                        文字列の計算式は現状のままでは計算できないので、Fcuntionオブジェクトで実行します。
                    </p>
                    <li>
                        <p>
                            Fcuntionオブジェクトで計算式を直接実行
                        </p>
                    </li>
                    <p>
                        計算結果を表示したら計算式を表示するエリアを空にします。
                    </p>
                    <li>
                        <p>
                            項番2で取得したエレメントに対して計算式を削除
                        </p>
                    </li>
                </ol>
             </div>
             <div class="box-child__content">
                <h4><span>課題3.</span>演算機能</h4>
                <p>
                    イベントを取得できたら、計算結果を表示します。<br>
                    イベント処理用に作った共通関数に取得、演算、表示部分のロジックを追加していきましょう。
                </p>
                <ol>
                    <li>
                        <p>
                            計算結果用キーのタグ内にあるvalue属性を取得し、この値を元に処理を振り分けます。
                        </p>
                    </li>
                    <p>
                        イベントハンドラ、イベントリスナーでvalue属性値を取得
                    </p>
                    <li>
                        <p>
                            各表示エリア部分のエレメントを取得
                        </p>
                    </li>
                    <p>
                        計算式に「×」と「÷」が入っている場合は、計算式には使用できない為置換します。
                    </p>
                    <li>
                        <p>
                            計算式内の「×」を「*」、「÷」を「/」に置換
                        </p>
                    </li>
                    <p>
                        文字列の計算式は現状のままでは計算できないので、Fcuntionオブジェクトで実行します。
                    </p>
                    <li>
                        <p>
                            Fcuntionオブジェクトで計算式を直接実行
                        </p>
                    </li>
                    <p>
                        計算結果を表示したら計算式を表示するエリアを空にします。
                    </p>
                    <li>
                        項番2で取得したエレメントに対して計算式を削除
                    </li>
                </ol>
             </div>
            
             <div class="box-child__content">
                 <h4><span>課題4.</span>入力制御</h4>
                 <p>
                     最後にアプリケーション仕様に沿って正しく動作するかの処理を加えていきます。<br>
                     課題1でも機能の説明を書きましたが、ここでは一般的な電卓機能として正しく動作させる為の制御を考えていきたいと思います。
                 </p>
                 <ol>
                     <li>
                         <p>
                             数値の表示エリアが空の状態で「＝」が押された時は、直前の演算子を削除して計算する。
                         </p>
                     </li>
                 </ol>
                 <p>
                     この他にも、計算結果表示時に、追加した方が良いと思う制御があれば迷わず処理を追加しましょう。<br>使う人の立場になって仕様を考える事は、アプリケーションを制作する上でとても大切な事です。
                 </p>
                 
              </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>